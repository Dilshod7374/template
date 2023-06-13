export default {
    init                : true,
    direction           : 'horizontal',
    touchEventsTarget   : 'wrapper',
    initialSlide        : 0,
    speed               : 300,
    cssMode             : false,
    updateOnWindowResize: true,
    resizeObserver      : true,
    nested              : false,
    createElements      : false,
    enabled             : true,
    focusableElements   : 'input, select, option, textarea, button, video, label',
    // Overrides
    width : null,
    height: null,
    //
    preventInteractionOnTransition: false,
    // ssr
    userAgent: null,
    url      : null,
    // To support iOS's swipe-to-go-back gesture (when being used in-app).
    edgeSwipeDetection: false,
    edgeSwipeThreshold: 20,
    // Autoheight
    autoHeight: false,
    // Set wrapper width
    setWrapperSize: false,
    // Virtual Translate
    virtualTranslate: false,
    // Effects
    effect: 'slide',
    // 'slide' or 'fade' or 'cube' or 'coverflow' or 'flip'
    // Breakpoints
    breakpoints    : undefined,
    breakpointsBase: 'window',
    // Slides grid
    spaceBetween        : 0,
    slidesPerView       : 1,
    slidesPerGroup      : 1,
    slidesPerGroupSkip  : 0,
    slidesPerGroupAuto  : false,
    centeredSlides      : false,
    centeredSlidesBounds: false,
    slidesOffsetBefore  : 0,
    // in px
    slidesOffsetAfter: 0,
    // in px
    normalizeSlideIndex     : true,
    centerInsufficientSlides: false,
    // Disable swiper and hide navigation when container not overflow
    watchOverflow: true,
    // Round length
    roundLengths: false,
    // Touches
    touchRatio                   : 1,
    touchAngle                   : 45,
    simulateTouch                : true,
    shortSwipes                  : true,
    longSwipes                   : true,
    longSwipesRatio              : 0.5,
    longSwipesMs                 : 300,
    followFinger                 : true,
    allowTouchMove               : true,
    threshold                    : 0,
    touchMoveStopPropagation     : false,
    touchStartPreventDefault     : true,
    touchStartForcePreventDefault: false,
    touchReleaseOnEdges          : false,
    // Unique Navigation Elements
    uniqueNavElements: true,
    // Resistance
    resistance     : true,
    resistanceRatio: 0.85,
    // Progress
    watchSlidesProgress: false,
    // Cursor
    grabCursor: false,
    // Clicks
    preventClicks           : true,
    preventClicksPropagation: true,
    slideToClickedSlide     : false,
    // Images
    preloadImages      : true,
    updateOnImagesReady: true,
    // loop
    loop                  : false,
    loopAdditionalSlides  : 0,
    loopedSlides          : null,
    loopedSlidesLimit     : true,
    loopFillGroupWithBlank: false,
    loopPreventsSlide     : true,
    // rewind
    rewind: false,
    // Swiping/no swiping
    allowSlidePrev: true,
    allowSlideNext: true,
    swipeHandler  : null,
    // '.swipe-handler',
    noSwiping        : true,
    noSwipingClass   : 'swiper-no-swiping',
    noSwipingSelector: null,
    // Passive Listeners
    passiveListeners       : true,
    maxBackfaceHiddenSlides: 10,
    // NS
    containerModifierClass: 'swiper-',
    // NEW
    slideClass               : 'swiper-slide',
    slideBlankClass          : 'swiper-slide-invisible-blank',
    slideActiveClass         : 'swiper-slide-active',
    slideDuplicateActiveClass: 'swiper-slide-duplicate-active',
    slideVisibleClass        : 'swiper-slide-visible',
    slideDuplicateClass      : 'swiper-slide-duplicate',
    slideNextClass           : 'swiper-slide-next',
    slideDuplicateNextClass  : 'swiper-slide-duplicate-next',
    slidePrevClass           : 'swiper-slide-prev',
    slideDuplicatePrevClass  : 'swiper-slide-duplicate-prev',
    wrapperClass             : 'swiper-wrapper',
    // Callbacks
    runCallbacksOnInit: true,
    // Internals
    _emitClasses: false
};

import {extend} from '../../shared/utils.js';

const isGridEnabled = (swiper, params) => {
    return swiper.grid && params.grid && params.grid.rows > 1;
};

export default function setBreakpoint() {
    const swiper      = this;
    const {
              activeIndex,
              initialized,
              loopedSlides = 0,
              params,
              $el
          }           = swiper;
    const breakpoints = params.breakpoints;
    if (!breakpoints || breakpoints && Object.keys(breakpoints).length === 0) return; // Get breakpoint for window width and update parameters

    const breakpoint = swiper.getBreakpoint(breakpoints, swiper.params.breakpointsBase, swiper.el);
    if (!breakpoint || swiper.currentBreakpoint === breakpoint) return;
    const breakpointOnlyParams = breakpoint in breakpoints ? breakpoints[breakpoint] : undefined;
    const breakpointParams     = breakpointOnlyParams || swiper.originalParams;
    const wasMultiRow          = isGridEnabled(swiper, params);
    const isMultiRow           = isGridEnabled(swiper, breakpointParams);
    const wasEnabled           = params.enabled;

    if (wasMultiRow && !isMultiRow) {
        $el.removeClass(`${params.containerModifierClass}grid ${params.containerModifierClass}grid-column`);
        swiper.emitContainerClasses();
    } else if (!wasMultiRow && isMultiRow) {
        $el.addClass(`${params.containerModifierClass}grid`);

        if (breakpointParams.grid.fill && breakpointParams.grid.fill === 'column' || !breakpointParams.grid.fill && params.grid.fill === 'column') {
            $el.addClass(`${params.containerModifierClass}grid-column`);
        }

        swiper.emitContainerClasses();
    } // Toggle navigation, pagination, scrollbar


    ['navigation', 'pagination', 'scrollbar'].forEach(prop => {
        const wasModuleEnabled = params[prop] && params[prop].enabled;
        const isModuleEnabled  = breakpointParams[prop] && breakpointParams[prop].enabled;

        if (wasModuleEnabled && !isModuleEnabled) {
            swiper[prop].disable();
        }

        if (!wasModuleEnabled && isModuleEnabled) {
            swiper[prop].enable();
        }
    });
    const directionChanged = breakpointParams.direction && breakpointParams.direction !== params.direction;
    const needsReLoop      = params.loop && (breakpointParams.slidesPerView !== params.slidesPerView || directionChanged);

    if (directionChanged && initialized) {
        swiper.changeDirection();
    }

    extend(swiper.params, breakpointParams);
    const isEnabled = swiper.params.enabled;
    Object.assign(swiper, {
        allowTouchMove: swiper.params.allowTouchMove,
        allowSlideNext: swiper.params.allowSlideNext,
        allowSlidePrev: swiper.params.allowSlidePrev
    });

    if (wasEnabled && !isEnabled) {
        swiper.disable();
    } else if (!wasEnabled && isEnabled) {
        swiper.enable();
    }

    swiper.currentBreakpoint = breakpoint;
    swiper.emit('_beforeBreakpoint', breakpointParams);

    if (needsReLoop && initialized) {
        swiper.loopDestroy();
        swiper.loopCreate();
        swiper.updateSlides();
        swiper.slideTo(activeIndex - loopedSlides + swiper.loopedSlides, 0, false);
    }

    swiper.emit('breakpoint', breakpointParams);
}

function prepareClasses(entries, prefix) {
    const resultClasses = [];
    entries.forEach(item => {
        if (typeof item === 'object') {
            Object.keys(item).forEach(classNames => {
                if (item[classNames]) {
                    resultClasses.push(prefix + classNames);
                }
            });
        } else if (typeof item === 'string') {
            resultClasses.push(prefix + item);
        }
    });
    return resultClasses;
}

export default function addClasses() {
    const swiper = this;
    const {
              classNames,
              params,
              rtl,
              $el,
              device,
              support
          }      = swiper; // prettier-ignore

    const suffixes = prepareClasses([
        'initialized', params.direction, {
            'pointer-events': !support.touch
        }, {
            'free-mode': swiper.params.freeMode && params.freeMode.enabled
        }, {
            'autoheight': params.autoHeight
        }, {
            'rtl': rtl
        }, {
            'grid': params.grid && params.grid.rows > 1
        }, {
            'grid-column': params.grid && params.grid.rows > 1 && params.grid.fill === 'column'
        }, {
            'android': device.android
        }, {
            'ios': device.ios
        }, {
            'css-mode': params.cssMode
        }, {
            'centered': params.cssMode && params.centeredSlides
        }, {
            'watch-progress': params.watchSlidesProgress
        }
    ], params.containerModifierClass);
    classNames.push(...suffixes);
    $el.addClass([...classNames].join(' '));
    swiper.emitContainerClasses();
}
