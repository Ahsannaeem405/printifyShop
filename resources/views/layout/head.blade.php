<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rehman</title>


    <style id="sprd-css">.SprdMain #sprd-content {
            outline: none
        }

        .SprdMain .sprd-bc-transp {
            border-color: transparent
        }

        .SprdMain .sprd-sr-only {
            border: 0;
            clip: rect(0, 0, 0, 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            white-space: nowrap;
            width: 1px
        }

        .SprdMain .sprd-sr-only:active, .SprdMain .sprd-sr-only:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            white-space: inherit;
            width: auto
        }

        .SprdMain input::-ms-clear {
            display: none
        }

        .SprdMain .sprd__caption {
            margin: 1em 0;
            font-size: 1.5em
        }

        .SprdMain .sprd__caption-link {
            color: inherit;
            text-decoration: none
        }

        .SprdMain .sprd__sub-caption {
            margin: 0 0 .5em;
            font-size: 1em;
            font-weight: 600
        }

        .SprdMain .sprd__cta-link {
            padding: .571em 0;
            color: inherit;
            font-size: .875em;
            font-weight: 700;
            text-decoration: underline
        }

        .SprdMain .sprd__cta-link:visited {
            color: inherit
        }

        .SprdMain .sprd__text {
            white-space: pre-line;
            font-size: .875em;
            line-height: 1.3em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd__caption {
                font-size: 1.75em
            }

            .SprdMain .sprd__sub-caption {
                font-size: 1.125em;
                margin-bottom: .444em
            }

            .SprdMain .sprd__cta-link {
                padding: .5em 0;
                font-size: 1em
            }

            .SprdMain .sprd__text {
                font-size: 1em;
                line-height: 1.5em
            }
        }

        .SprdMain .sprd-error-message {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            margin: 20px 32px 5em
        }

        .SprdMain .sprd-error-message__ghost {
            flex: 1 1 0;
            align-self: flex-start;
            color: red;
            max-width: 50%
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-error-message__ghost {
                max-width: 100%;
                min-width: 100%
            }
        }

        .SprdMain .sprd-error-message__sorry {
            flex: 1 1 0;
            min-width: 50%
        }

        .SprdMain .sprd-error-message__technical-mumbo-jumbo {
            width: 100%;
            margin-top: 4em;
            font-size: .875em
        }

        .SprdMain .sprd-error-message__techinfo {
            display: flex;
            flex-wrap: wrap;
            flex-direction: column
        }

        .SprdMain .sprd-error-message__techinfo-row {
            display: flex;
            flex-wrap: wrap;
            padding: 3px
        }

        .SprdMain .sprd-error-message__techinfo-row div:first-child {
            font-weight: 700;
            width: 8em;
            flex: 0 1 auto
        }

        .SprdMain .sprd-error-message__techinfo-row div {
            flex: 1 0 0;
            max-width: 100%
        }

        body {
            margin: 0
        }

        #sprd-main {
            z-index: 1;
            position: relative;
            font-size: 1rem
        }

        .SprdMain {
            max-width: 1400px;
            width: 100%;
            margin: 0 auto
        }

        .SprdMain img {
            display: block;
            max-width: none
        }

        .SprdMain__noscript-message {
            padding: 1em;
            background-color: red;
            color: #fff;
            font-weight: 700;
            text-align: center
        }

        .SprdMain h1 {
            font-size: 2em
        }

        @media screen and (max-width: 767px) {
            .SprdMain h1 {
                font-size: 1.43em
            }
        }

        .sprd--standalone, .sprd--standalone #sprd-main, .sprd--standalone > body {
            height: 100%
        }

        @media (min-width: 1400px) {
            .sprd--standalone #sprd-main {
                margin-left: calc(50vw - 700px)
            }
        }

        .sprd--standalone #sprd-container {
            display: flex;
            flex-direction: column;
            min-height: 100%
        }

        .sprd--standalone .sprd-footer {
            margin-top: auto
        }

        .SprdMain .sprd-overlay, .SprdMain .sprd-overlay .sprd-background {
            top: 0;
            bottom: 0;
            left: 0;
            right: 0
        }

        .SprdMain .sprd-overlay {
            position: fixed;
            overflow: hidden;
            z-index: 30;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center
        }

        .SprdMain .sprd-overlay .sprd-background {
            position: absolute;
            background-color: #333;
            opacity: .7
        }

        .SprdMain .sprd-overlay h2, .SprdMain .sprd-overlay h3, .SprdMain .sprd-overlay h4 {
            font-size: 1.5em
        }

        .SprdMain .sprd-overlay h1, .SprdMain .sprd-overlay h2, .SprdMain .sprd-overlay h3, .SprdMain .sprd-overlay h4 {
            text-align: left
        }

        .SprdMain .sprd-overlay .sprd-Wrapper {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 90vw;
            max-width: 450px;
            padding: 24px;
            overflow: hidden;
            border-radius: 2px;
            box-shadow: 0 0 5px #404040;
            box-sizing: border-box;
            -webkit-overflow-scrolling: touch;
            outline: none
        }

        .SprdMain .sprd-overlay .sprd-Wrapper > .sprd-content {
            padding: .5em 1em;
            overflow: auto;
            -webkit-overflow-scrolling: touch
        }

        .SprdMain .sprd-overlay .sprd-loading {
            position: relative
        }

        .SprdMain .sprd-overlay-title {
            font-size: 130%;
            font-weight: 700
        }

        .SprdMain .sprd-overlay-message, .SprdMain .sprd-overlay-title {
            text-align: center;
            margin-bottom: 1.5em
        }

        .SprdMain .sprd-overlay-buttons {
            display: flex;
            flex-direction: column
        }

        .SprdMain .sprd-overlay-buttons .sprd-button {
            display: inline-block;
            margin-bottom: 1em
        }

        .SprdMain .sprd-overlay-buttons .sprd-button:last-child {
            margin-bottom: 0
        }

        .SprdMain .sprd-overlay__close {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            position: absolute;
            top: 0;
            right: 0;
            width: 3.625em;
            height: 3.875em
        }

        .SprdMain .sprd-overlay__close-icon {
            width: 1.2em;
            height: 1.2em
        }

        .SprdMain .sprd-overlay__close + .sprd-content {
            margin-top: 1.5em
        }

        .SprdMain .sprd-appearance-list__gloss-overlay {
            background: linear-gradient(180deg, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, .95) 50%, hsla(0, 0%, 100%, 0), hsla(0, 0%, 100%, 0));
            animation: glossyShine 2s forwards;
            animation-iteration-count: infinite;
            position: absolute;
            top: -30%;
            right: -30%;
            bottom: -30%;
            left: -30%
        }

        @keyframes glossyShine {
            0% {
                transform: rotate(60deg) translateY(20px)
            }
            50% {
                transform: rotate(60deg) translateY(-45px)
            }
            to {
                transform: rotate(60deg) translateY(-45px)
            }
        }

        .SprdMain .sprd-appearance-list--listpage {
            margin: .25em 0 0;
            max-height: 28px;
            overflow: hidden;
            display: flex;
            flex-wrap: wrap;
            justify-content: center
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-appearance-list {
                max-height: 24px
            }
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-appearance-list {
                max-height: 18px
            }
        }

        .SprdMain .sprd-appearance-list__appearance {
            border: none;
            margin: 0;
            padding: 0;
            width: auto;
            overflow: visible;
            background: transparent;
            cursor: pointer
        }

        .SprdMain .sprd-appearance-list__appearance:focus {
            outline: none
        }

        .SprdMain .sprd-appearance-list__appearance .sprd-color-circle {
            width: 18px;
            height: 18px
        }

        .SprdMain .sprd-appearance-list__appearance__more {
            display: block;
            padding: 3px
        }

        .SprdMain .sprd-appearance-list__appearance__more-icon {
            width: 12px;
            height: 12px
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-appearance-list__appearance .sprd-color-circle {
                width: 24px;
                height: 24px
            }

            .SprdMain .sprd-appearance-list__appearance__more {
                padding: 5px
            }

            .SprdMain .sprd-appearance-list__appearance__more-icon {
                width: 14px;
                height: 14px
            }
        }

        .SprdMain .sprd-appearance-list__appearance--large {
            position: relative;
            display: inline-flex;
            flex: none;
            overflow: hidden
        }

        .SprdMain .sprd-appearance-list__appearance--large .sprd-color-circle {
            width: 48px;
            height: 48px
        }

        .SprdMain .sprd-appearance-list__appearance--stockout {
            pointer-events: none;
            opacity: .25
        }

        .SprdMain .sprd-slider--1items .sprd-slider__content .sprd-slider__item {
            width: 100%
        }

        .SprdMain .sprd-slider--2items .sprd-slider__content .sprd-slider__item {
            width: 50%
        }

        .SprdMain .sprd-slider--3items .sprd-slider__content .sprd-slider__item {
            width: 33.33333%
        }

        .SprdMain .sprd-slider--4items .sprd-slider__content .sprd-slider__item {
            width: 25%
        }

        .SprdMain .sprd-slider--5items .sprd-slider__content .sprd-slider__item {
            width: 20%
        }

        .SprdMain .sprd-slider--6items .sprd-slider__content .sprd-slider__item {
            width: 16.66667%
        }

        .SprdMain .sprd-slider {
            display: flex;
            flex: 1 0 auto;
            position: relative;
            flex-direction: row;
            flex-wrap: wrap;
            width: 100%;
            height: 100%
        }

        .SprdMain .sprd-slider__button {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center
        }

        .SprdMain .sprd-slider__button[disabled] {
            opacity: .1
        }

        .SprdMain .sprd-slider__button__icon {
            transition: opacity .5s ease-in-out;
            width: 26px;
            height: 26px;
            margin: 0 -2px;
            cursor: pointer
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-slider__button__icon {
                width: 40px;
                height: 40px;
                margin: 0 -4px
            }
        }

        .SprdMain .sprd-slider__main {
            width: 100%;
            position: relative;
            display: flex
        }

        .SprdMain .sprd-slider__wrapper {
            width: 100%;
            overflow: hidden
        }

        .SprdMain .sprd-slider__content {
            position: relative;
            display: flex
        }

        .SprdMain .sprd-slider__item {
            display: flex;
            flex-shrink: 0;
            height: 100%;
            justify-content: center
        }

        .SprdMain .sprd-slider__dots {
            position: absolute;
            top: calc(100% + .75em);
            left: 0;
            right: 0;
            display: flex;
            flex-direction: row;
            justify-content: center
        }

        .SprdMain .sprd-slider__dot {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            border: 0;
            cursor: pointer;
            outline: none;
            width: .75em;
            height: .75em;
            margin: .2em;
            border-radius: 100%;
            transition: background-color .5s ease-in-out
        }

        .SprdMain .sprd-slider__show-more {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 150px;
            max-width: 150px;
            font-weight: 700
        }

        .SprdMain .sprd-slider__show-more-caret {
            transform: rotate(-90deg);
            width: 1.2em;
            height: 1.2em
        }

        .SprdMain .sprd-slider__show-more-link {
            color: inherit
        }

        .SprdMain .sprd-link {
            display: inline-block;
            text-decoration: none;
            color: inherit;
            border-bottom: 2px solid transparent;
            transition: border-bottom-color .25s ease-in-out;
            height: 1.6em;
            cursor: pointer
        }

        .SprdMain .sprd-link:hover {
            border-color: inherit
        }

        .SprdMain .sprd-link--selected {
            border-color: inherit;
            font-weight: 700
        }

        .SprdMain .sprd-link-2, .SprdMain .sprd-slider__show-more {
            text-decoration: underline;
            cursor: pointer;
            font-weight: 700
        }

        .SprdMain .sprd-caret-link__icon {
            transform: rotate(-90deg);
            vertical-align: middle;
            width: 1em;
            height: 1em
        }

        .SprdMain .sprd-big-loading-spinner, .SprdMain .sprd-detail-suggestions__loading-spinner {
            width: 5em;
            height: 5em;
            border: .5em solid
        }

        .SprdMain .sprd-big-loading-spinner {
            margin: 10em auto
        }

        .SprdMain .sprd-ghost__ghost {
            animation: sprd-ghost-float 2s ease-in-out infinite;
            transform-origin: 50% 50%
        }

        .SprdMain .sprd-ghost__hanger {
            opacity: .5;
            fill: none;
            stroke-width: 4px;
            stroke-miterlimit: 10
        }

        .SprdMain .sprd-ghost__outline {
            fill: none;
            stroke-width: 3px;
            stroke-linejoin: round;
            stroke-miterlimit: 10
        }

        .SprdMain .sprd-ghost__shadow {
            opacity: .05
        }

        .SprdMain .sprd-ghost__floor {
            opacity: .2
        }

        .SprdMain .sprd-search-ghost__magnifier {
            transform-origin: 85% 45%;
            transform: rotate(-50deg);
            animation: sprd-search-ghost-move 2s ease-in-out infinite
        }

        .SprdMain .sprd-search-ghost__left-eye {
            animation: sprd-search-ghost-left-eye-move 2s ease-in-out infinite
        }

        .SprdMain .sprd-search-ghost__right-eye {
            animation: sprd-search-ghost-right-eye-move 2s ease-in-out infinite
        }

        @keyframes sprd-ghost-float {
            0% {
                transform: translate(0)
            }
            50% {
                transform: translateY(10px)
            }
        }

        @keyframes sprd-search-ghost-move {
            10% {
                transform: rotate(-50deg)
            }
            50%, 60% {
                transform: rotate(10deg)
            }
        }

        @keyframes sprd-search-ghost-left-eye-move {
            10% {
                transform: translate(0)
            }
            50%, 60% {
                transform: translate(3%, 3%)
            }
        }

        @keyframes sprd-search-ghost-right-eye-move {
            10% {
                transform: translate(0)
            }
            50%, 60% {
                transform: translateY(1.7%)
            }
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-blurry-slider {
                width: 100%;
                position: relative;
                box-sizing: border-box
            }

            .SprdMain .sprd-blurry-slider__items {
                display: flex;
                flex-wrap: nowrap;
                overflow-x: scroll;
                overflow-y: hidden
            }

            .SprdMain .sprd-blurry-slider__items:after {
                content: "";
                display: block;
                width: 12px;
                flex: none
            }

            .SprdMain .sprd-blurry-slider:after {
                content: "";
                position: absolute;
                top: 0;
                bottom: 0;
                right: 0;
                width: 24px;
                z-index: 1
            }
        }

        .SprdMain .sprd-button:not(.sprd-item):active {
            box-shadow: 0 1px 0 0;
            text-decoration: none;
            position: relative;
            top: 1px
        }

        .SprdMain .sprd-button {
            font-family: inherit;
            font-weight: 700;
            box-sizing: border-box;
            text-align: center;
            display: inline-block;
            vertical-align: middle;
            cursor: pointer;
            padding: .7em 1.2em;
            font-size: 1em;
            text-decoration: none
        }

        .SprdMain .sprd-button:focus {
            outline: none
        }

        .SprdMain .sprd-button-secondary-cta-ghost {
            font-family: inherit;
            padding: 0 .7em;
            min-height: 2.75em;
            border-width: 1px;
            border-style: solid;
            cursor: pointer;
            background-color: transparent
        }

        .SprdMain .sprd-button-secondary-cta-ghost:focus {
            outline: none
        }

        .SprdMain .sprd-button-secondary-cta-ghost:hover {
            box-shadow: inset 0 0 0 1px
        }

        .SprdMain .sprd-img-spinner {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0
        }

        .SprdMain .sprd-img-spinner__spinner {
            width: 1.5em;
            height: 1.5em;
            margin: -.75em 0 0 -.75em;
            position: absolute;
            left: 50%;
            top: 50%;
            border: .2em solid;
            box-sizing: border-box
        }

        .SprdMain .sprd-img-spinner__image {
            width: 100%;
            height: 100%;
            color: transparent;
            transition: opacity .2s ease-in .25s;
            opacity: 1;
            -webkit-transform: translateZ(0)
        }

        .SprdMain .sprd-img-spinner__image--loading {
            opacity: 0
        }

        .SprdMain .sprd-customer-reviews {
            width: 100%;
            display: flex
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-customer-reviews {
                flex-direction: column
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-customer-reviews__left {
                margin-right: 2em;
                flex: 0 0 auto
            }
        }

        .SprdMain .sprd-customer-reviews__right {
            flex: 1 1 auto
        }

        .SprdMain .sprd-customer-reviews__sub-title {
            display: flex;
            align-items: center
        }

        .SprdMain .sprd-customer-reviews__sub-title p {
            margin-left: .5em;
            overflow: hidden
        }

        .SprdMain .sprd-customer-reviews__icon {
            width: 24px;
            height: 24px
        }

        .SprdMain .sprd-customer-reviews__review-entry {
            margin: 0 0 1.5em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-customer-reviews__review-entry {
                margin: 0 0 .5em
            }
        }

        .SprdMain .sprd-customer-reviews__review-text {
            overflow-wrap: break-word;
            word-wrap: break-word
        }

        .SprdMain .sprd-customer-reviews__histogram {
            margin: .75em 0 3em
        }

        .SprdMain .sprd-customer-reviews__histogram-row {
            display: flex;
            justify-content: flex-end;
            margin-top: .5em
        }

        .SprdMain .sprd-customer-reviews__histogram__btn {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            max-width: 10em;
            flex: 0 1 auto;
            overflow: hidden
        }

        .SprdMain .sprd-customer-reviews__histogram-bar {
            display: flex;
            border: 1px solid;
            width: 10em;
            flex: 0 0 auto;
            height: 1em;
            margin: 0 1em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-customer-reviews__histogram-bar {
                width: calc(100% - 14em);
                max-width: 10em
            }
        }

        .SprdMain .sprd-customer-reviews__histogram-bar__inner {
            background-color: currentColor
        }

        .SprdMain .sprd-customer-reviews__histogram-count {
            flex: 0 0 auto;
            width: calc(100% - 20em);
            min-width: 4em
        }

        .SprdMain .sprd-customer-reviews__nav {
            display: flex;
            flex-direction: column
        }

        .SprdMain .sprd-customer-reviews__sort-title {
            margin-bottom: .7em;
            font-size: 1.125em;
            overflow-wrap: break-word
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-customer-reviews__sort-container {
                flex-direction: column;
                display: flex;
                width: -webkit-fit-content;
                width: -moz-fit-content;
                width: fit-content
            }
        }

        .SprdMain .sprd-customer-reviews__sort-btn {
            margin: 0 .8em .8em 0;
            overflow-wrap: break-word;
            font-size: 1em;
            font-weight: 700
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-customer-reviews__sort-btn {
                display: block;
                min-width: 13em
            }
        }

        .SprdMain .sprd-customer-reviews__pagination {
            width: 100%;
            display: flex;
            margin: 2em 0 0;
            justify-content: center
        }

        .SprdMain .sprd-customer-reviews__pagination-btn {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            margin: 0 5px;
            border-width: 1px;
            border-style: solid;
            border-radius: 50%
        }

        .SprdMain .sprd-customer-reviews__pagination-btn-icon {
            width: 1.75em;
            height: 1.75em
        }

        .SprdMain .sprd-customer-reviews__pagination-text {
            line-height: 40px;
            text-align: center;
            margin-right: 14px;
            margin-left: 14px;
            flex: 0 1 auto;
            overflow: hidden;
            white-space: nowrap
        }

        .SprdMain .sprd-customer-reviews__pagination-text--firstpage {
            margin-left: 114px
        }

        .SprdMain .sprd-customer-reviews__pagination-text--lastpage {
            margin-right: 114px
        }

        .SprdMain .sprd-customer-reviews--loading {
            pointer-events: none;
            opacity: .2
        }

        .SprdMain .sprd-ghost-page {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: center;
            margin: 20px 32px 0
        }

        .SprdMain .sprd-ghost-page #sprd-ghost {
            flex: 1 1 0;
            max-width: 50%
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-ghost-page #sprd-ghost {
                min-width: 100%
            }
        }

        .SprdMain .sprd-ghost-page__block {
            flex: 1 1 0;
            min-width: 50%
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-ghost-page__block {
                text-align: center
            }
        }

        .SprdMain .sprd-ghost-page__block p {
            margin: 2em 0
        }

        .SprdMain .sprd-ghost-page .sprd-detail-suggestions {
            flex: 1 1 0;
            min-width: 100%;
            margin: 2em 0
        }

        .SprdMain .sprd-ghost-page .sprd-button {
            text-decoration: none
        }

        .SprdMain .sprd-media__image {
            margin-bottom: 2em
        }

        .SprdMain .sprd-media__image .sprd-img-spinner {
            position: relative
        }

        .SprdMain .sprd-media__image .sprd-img-spinner__image {
            width: auto;
            max-width: 100%;
            height: auto;
            max-height: 250px;
            margin: 0 auto
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-media__image .sprd-img-spinner__image {
                max-height: 300px
            }
        }

        .SprdMain .sprd-media__image .sprd-img-spinner__image[src$=".svg"] {
            height: 100%
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-media__image {
                flex: 1 1 0%;
                min-width: 200px;
                margin-bottom: 0;
                margin-right: 1em
            }
        }

        .SprdMain .sprd-media__video {
            margin-bottom: 2em;
            position: relative
        }

        .SprdMain .sprd-media__video:before {
            content: "";
            display: block;
            padding-top: 56.25%
        }

        .SprdMain .sprd-media__video-embed {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-media__video {
                flex: 0 1 640px;
                margin-bottom: 0;
                margin-right: 1em
            }
        }

        .SprdMain .sprd-search-form {
            display: flex;
            height: 3em;
            max-width: 400px
        }

        .SprdMain .sprd-search-form__wrapper {
            height: 100%;
            display: flex;
            flex: 1;
            position: relative
        }

        .SprdMain .sprd-search-form__input {
            width: 100%;
            padding: 0 2em 0 1em;
            outline: none;
            font: inherit;
            box-sizing: border-box
        }

        .SprdMain .sprd-search-form__clear, .SprdMain .sprd-search-form__submit {
            font: inherit;
            text-align: inherit;
            border: 0;
            cursor: pointer;
            outline: none
        }

        .SprdMain .sprd-search-form__clear-icon, .SprdMain .sprd-search-form__submit-icon {
            display: block;
            width: 1em;
            height: 1em
        }

        .SprdMain .sprd-search-form__clear {
            position: absolute;
            right: .5em;
            top: 50%;
            transform: translateY(-50%);
            padding: .5em;
            color: inherit;
            background: #bbb;
            border-radius: 100%
        }

        .SprdMain .sprd-search-form__submit {
            padding: 1em
        }

        .SprdMain .sprd-pa {
            font-size: 1.143em
        }

        .SprdMain .sprd-pa__text {
            margin-bottom: 2.25em
        }

        .SprdMain .sprd-pa__button {
            display: inline-flex
        }

        .SprdMain .sprd-pa__button-icon {
            width: 1.5em;
            height: 1.5em;
            margin: -.125em .75em 0 0
        }

        .SprdMain .sprd-quantity-control {
            display: flex;
            align-items: center;
            max-width: 135px;
            border-width: 1px;
            border-style: solid
        }

        .SprdMain .sprd-quantity-control__button {
            padding: .625em;
            display: flex;
            line-height: 1;
            border: 0 solid;
            border-color: inherit;
            background-color: transparent;
            color: inherit;
            cursor: pointer;
            font-size: 1em
        }

        .SprdMain .sprd-quantity-control__button:first-child {
            border-right-width: 1px
        }

        .SprdMain .sprd-quantity-control__button:last-child {
            border-left-width: 1px
        }

        .SprdMain .sprd-quantity-control__icon {
            width: 1em;
            height: 1em
        }

        .SprdMain .sprd-quantity-control__input {
            display: block;
            flex: 1 1 1.75em;
            min-width: 0;
            padding: 0 .25em;
            font: inherit;
            text-align: center;
            border: none;
            box-sizing: border-box
        }

        .SprdMain .sprd-quantity-control__input:focus {
            outline: none
        }

        .SprdMain .sprd-skip-nav__list {
            position: relative;
            margin: 0;
            padding: 0;
            list-style: none
        }

        .SprdMain .sprd-skip-nav__item {
            width: -webkit-fit-content;
            width: -moz-fit-content;
            width: fit-content;
            max-width: 100%;
            position: absolute;
            top: 0;
            left: 50%;
            transform: translateX(-50%)
        }

        .SprdMain .sprd-skip-nav__link {
            display: inline-block;
            text-decoration: none
        }

        .SprdMain .sprd-skip-nav__btn {
            font: inherit
        }

        .SprdMain .sprd-skip-nav__btn, .SprdMain .sprd-skip-nav__link {
            padding: .5em 1em;
            color: #fff;
            background-color: #000;
            border: 1px solid #fff;
            border-top: 0;
            outline: none
        }

        .SprdMain .sprd-skip-nav--desktop {
            display: none
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-skip-nav--mobile {
                display: none
            }

            .SprdMain .sprd-skip-nav--desktop {
                display: block
            }
        }

        .SprdMain .sprd-big-loading-spinner, .SprdMain .sprd-detail-cta__button__spinner, .SprdMain .sprd-detail-suggestions__loading-spinner, .SprdMain .sprd-img-spinner__spinner, .SprdMain .sprd-mobilefilter__spinner, .SprdMain .sprd-promo-loading-spinner {
            border-style: solid;
            border-top-color: transparent !important;
            border-radius: 50%;
            animation: sprd-loader 1s linear infinite, sprd-loader-fadein .5s
        }

        @keyframes sprd-loader {
            0% {
                transform: rotate(0deg)
            }
            to {
                transform: rotate(1turn)
            }
        }

        @keyframes sprd-loader-fadein {
            0% {
                opacity: 0
            }
            50% {
                opacity: 0
            }
            to {
                opacity: 1
            }
        }

        .SprdMain .sprd-info-banner {
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            padding: .45em 1.75em;
            background-color: #b32d38;
            color: #fff
        }

        .SprdMain .sprd-info-banner__icon {
            flex: 0 0 auto;
            width: 1.25em;
            height: 1.25em;
            margin-right: .5em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-info-banner__icon {
                width: 1.5em;
                height: 1.5em
            }
        }

        .SprdMain .sprd-info-banner__text {
            line-height: 1.25;
            text-align: center
        }

        .SprdMain .sprd-info-banner__text--desktop {
            display: none;
            font-size: .875em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-info-banner__text--desktop {
                display: flex
            }
        }

        .SprdMain .sprd-info-banner__text--mobile {
            display: flex;
            font-size: .75em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-info-banner__text--mobile {
                display: none
            }
        }

        .SprdMain .sprd-info-banner__link {
            display: flex;
            flex: 0 0 auto;
            align-items: center;
            color: inherit;
            text-decoration: none;
            margin-left: .5em
        }

        .SprdMain .sprd-info-banner__link-text {
            border-bottom: 1px solid
        }

        .SprdMain .sprd-info-banner__link__icon {
            width: 1em;
            height: 1em;
            transform: rotate(-90deg)
        }

        .SprdMain .sprd-info-banner__link--desktop {
            display: none;
            font-size: .875em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-info-banner__link--desktop {
                display: flex
            }
        }

        .SprdMain .sprd-info-banner__link--mobile {
            display: flex;
            font-size: .75em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-info-banner__link--mobile {
                display: none
            }
        }

        .sprd-social-bar {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: .5em 0 0
        }

        .sprd-social-bar__label {
            padding-right: .5em
        }

        .sprd-social-bar__link {
            display: flex;
            align-items: center;
            justify-content: center;
            max-width: 2em;
            max-height: 2em;
            padding: .4em;
            margin: 1em .5em;
            border-radius: 100%
        }

        .sprd-social-bar__icon {
            width: 1.6em;
            height: 1.6em
        }

        .sprd-social-bar--burger .sprd-social-bar__link, .sprd-social-bar--header .sprd-social-bar__link {
            max-width: 1.6em;
            max-height: 1.6em;
            margin: 4px;
            padding: 3px
        }

        .sprd-social-bar--burger .sprd-social-bar__icon, .sprd-social-bar--header .sprd-social-bar__icon {
            width: 1em;
            height: 1em
        }

        .sprd-social-bar--burger {
            justify-content: flex-start;
            padding: 0
        }

        .sprd-social-bar--header {
            justify-content: flex-end;
            flex-wrap: nowrap;
            padding: 0 18px;
            font-size: .875em
        }

        @media screen and (max-width: 767px) {
            .sprd-social-bar--header {
                display: none
            }
        }

        .sprd-social-bar__about-link {
            margin-right: 2.5em;
            color: inherit;
            text-decoration: none
        }

        .sprd-footer .sprd-social-bar {
            padding-top: 0
        }

        .sprd-footer .sprd-social-bar__icon {
            margin-top: 0;
            margin-bottom: 0
        }

        .SprdMain .sprd-header-custom-html {
            background: no-repeat bottom;
            overflow: hidden;
            text-align: center;
            max-width: 100%
        }

        .SprdMain .sprd-header-custom-html img {
            max-width: 100%
        }

        .SprdMain .sprd-basket-indicator {
            display: flex
        }

        .SprdMain .sprd-basket-indicator__button {
            padding: 0 0 3px;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            margin-right: 10px;
            position: relative;
            border-width: 0
        }

        .SprdMain .sprd-basket-indicator__button--open, .SprdMain .sprd-basket-indicator__button:focus {
            padding: 6px 0;
            border-bottom-width: 3px;
            border-bottom-style: solid
        }

        .SprdMain .sprd-basket-indicator__button:focus {
            border-color: #ddd
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-basket-indicator__button {
                margin-right: 20px
            }
        }

        .SprdMain .sprd-basket-indicator__icon-count-wrapper {
            position: relative
        }

        .SprdMain .sprd-basket-indicator__icon {
            display: flex;
            align-items: center;
            width: 1.5em;
            height: 1.5em;
            margin: 0 .5em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-basket-indicator__icon {
                width: 2em;
                height: 2em
            }
        }

        .SprdMain .sprd-basket-indicator__count {
            display: flex;
            justify-content: center;
            position: absolute;
            top: 0;
            right: 0;
            font-size: .75em;
            font-weight: 700;
            line-height: 1;
            min-height: 1em;
            min-width: 1em;
            padding: .25em;
            border-radius: .75em
        }

        .SprdMain .sprd-basket-notification {
            width: 25em;
            max-width: 100vw;
            padding: 14px 10px 10px;
            box-sizing: border-box;
            position: absolute;
            top: 100%;
            right: 0;
            z-index: 10;
            line-height: 1.5;
            text-align: left;
            border-style: solid;
            border-width: 0 1px 1px;
            outline: none
        }

        .SprdMain .sprd-basket-notification--highlight {
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            border-top-style: solid;
            border-top-width: .25em
        }

        .SprdMain .sprd-basket-notification--highlight:before {
            content: "";
            position: absolute;
            right: 1.125em;
            top: -.625em;
            border: .5em solid transparent;
            border-top-width: 0;
            border-bottom-color: inherit
        }

        .SprdMain .sprd-basket-notification__text {
            display: block;
            margin-right: 26px
        }

        .SprdMain .sprd-basket-notification__buttons {
            display: flex;
            flex-wrap: wrap;
            margin: -2px 0 0 -10px;
            justify-content: space-between
        }

        .SprdMain .sprd-basket-notification__buttons .sprd-button {
            flex: 1 0 0;
            min-width: -webkit-fit-content;
            min-width: -moz-fit-content;
            min-width: fit-content;
            margin: 10px 0 0 10px;
            padding: .7em
        }

        .SprdMain .sprd-basket-notification__dismiss {
            padding: 18px 10px 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            position: absolute;
            right: 0;
            top: 0
        }

        .SprdMain .sprd-basket-notification__dismiss-icon {
            display: block;
            width: 1em;
            height: 1em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-basket-notification {
                padding: 24px 20px 20px
            }

            .SprdMain .sprd-basket-notification--highlight:before {
                right: 1.375em
            }

            .SprdMain .sprd-basket-notification__buttons {
                margin-left: -20px
            }

            .SprdMain .sprd-basket-notification__buttons .sprd-button {
                margin: 20px 0 0 20px
            }

            .SprdMain .sprd-basket-notification__dismiss {
                padding: 28px 20px 0
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-basket-notification--highlight:before {
                right: 2em
            }
        }

        .SprdMain .sprd-search {
            display: flex
        }

        .SprdMain .sprd-search__button {
            padding: 0 0 3px;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            cursor: pointer;
            outline: none;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-width: 0
        }

        .SprdMain .sprd-search__button--open, .SprdMain .sprd-search__button:focus {
            padding: 6px 0;
            border-bottom-width: 3px;
            border-bottom-style: solid
        }

        .SprdMain .sprd-search__button:focus {
            border-color: #ddd
        }

        .SprdMain .sprd-search__icon {
            display: flex;
            align-items: center;
            width: 1.5em;
            height: 1.5em;
            margin: 0 .5em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-search__icon {
                width: 2em;
                height: 2em
            }
        }

        .SprdMain .sprd-search .sprd-search-form {
            z-index: 11;
            width: 100vw;
            position: absolute;
            top: 100%;
            right: 0;
            box-shadow: 0 2px 4px -1px rgba(0, 0, 0, .2), 0 4px 5px 0 rgba(0, 0, 0, .14), 0 1px 10px 0 rgba(0, 0, 0, .12)
        }

        .SprdMain .sprd-search .sprd-search-form__input {
            border: 0
        }

        @media screen and (max-width: 999px) {
            .SprdMain .sprd-navigation--hide-on-touchdevs {
                display: none
            }
        }

        .SprdMain .sprd-nav-link {
            box-sizing: border-box;
            text-decoration: none;
            display: flex;
            align-items: center;
            padding-top: 3px;
            padding-bottom: 3px
        }

        .SprdMain .sprd-nav-link__icon {
            margin-left: .2em;
            width: 1em;
            height: 1em
        }

        @media screen and (max-width: 999px) {
            .SprdMain .sprd-nav-link__icon {
                display: none
            }
        }

        .SprdMain .sprd-nav-link--active {
            padding-bottom: 0;
            border-bottom-width: 3px;
            border-bottom-style: solid
        }

        .SprdMain .sprd-department-filter {
            display: flex;
            white-space: nowrap;
            height: 3em;
            outline-width: 0
        }

        @media screen and (max-width: 999px) {
            .SprdMain .sprd-department-filter {
                overflow-x: auto
            }
        }

        .SprdMain .sprd-department-filter__openmenu {
            display: flex
        }

        .SprdMain .sprd-department-filter__openmenu > .sprd-nav-link {
            font-weight: 600;
            padding-right: .6em;
            padding-left: .6em
        }

        .SprdMain .sprd-department-filter__openmenu:hover > .sprd-nav-link {
            padding-bottom: 0;
            border-bottom-style: solid;
            border-bottom-width: 3px
        }

        .SprdMain .sprd-department-filter__openmenu:hover > .sprd-nav-link > .sprd-nav-link__caret {
            transform: rotate(-180deg)
        }

        .SprdMain .sprd-department-filter__openmenu:focus-within > .sprd-nav-link {
            padding-bottom: 0;
            border-bottom-style: solid;
            border-bottom-width: 3px
        }

        .SprdMain .sprd-department-filter__openmenu:focus-within > .sprd-nav-link > .sprd-nav-link__caret {
            transform: rotate(-180deg)
        }

        .SprdMain .sprd-department-filter__designer-icon {
            display: block;
            margin-right: 5px;
            margin-left: 0
        }

        .SprdMain .sprd-department-filter__entry {
            text-decoration: none
        }

        .SprdMain .sprd-promo-header {
            position: relative;
            padding: 0 1em;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            font-size: .75em
        }

        .SprdMain .sprd-promo-header, .SprdMain .sprd-promo-header__center {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            max-width: 100%
        }

        .SprdMain .sprd-promo-header__center {
            flex: 1 0 auto;
            margin: 2px 0 4px
        }

        .SprdMain .sprd-promo__button, .SprdMain .sprd-promo__toggle {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: inline-flex;
            align-items: center;
            line-height: inherit;
            margin-top: 2px
        }

        .SprdMain .sprd-promo__button {
            margin: 2px .75em 0;
            padding: .25em .75em;
            border: 1px solid;
            border-radius: .125em
        }

        .SprdMain .sprd-promo__button__icon {
            width: 1.25em;
            height: 1.25em;
            margin: -2px .5em -2px 0
        }

        .SprdMain .sprd-promo__button--disabled {
            cursor: not-allowed;
            pointer-events: none
        }

        .SprdMain .sprd-promo-countdown, .SprdMain .sprd-promo-shorttext {
            margin: 4px 0 2px
        }

        .SprdMain .sprd-promo-countdown {
            margin-right: .5em;
            font-weight: 700
        }

        .SprdMain .sprd-promo__toggle {
            margin: 3px 0 4px;
            padding: 4px 0
        }

        .SprdMain .sprd-promo-caret {
            width: 1.25em;
            height: 1.25em;
            margin: -.25em 0 -.25em .25em
        }

        .SprdMain .sprd-promo-code {
            padding: 1.43em 0;
            font-weight: 700
        }

        .SprdMain .sprd-promo-loading-spinner {
            width: .83em;
            height: .83em;
            border-color: #fff;
            margin: 0 5em
        }

        .SprdMain .sprd-promo-description {
            z-index: 11;
            position: absolute;
            top: 100%;
            right: 0;
            left: 0;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            padding: 4px 1em;
            line-height: 1.2;
            text-align: center
        }

        .SprdMain .sprd-promo--open .sprd-promo-caret {
            transform: rotate(180deg)
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-promo-header {
                font-size: .875em
            }

            .SprdMain .sprd-promo__toggle {
                position: absolute;
                top: 2px;
                right: 20px
            }
        }

        .SprdMain .sprd-burgermenu {
            position: fixed;
            height: 100%;
            width: 100%;
            transform: translateX(-100%);
            left: 0;
            top: 0;
            z-index: 30;
            overflow: scroll;
            transition: transform .3s ease-in-out;
            font-size: .875em
        }

        .SprdMain .sprd-burgermenu--open {
            transform: translateX(0)
        }

        .SprdMain .sprd-burgermenu__inner {
            outline: none
        }

        .SprdMain .sprd-burgermenu__content {
            margin: 0 20px 40px
        }

        .SprdMain .sprd-burgermenu__header {
            display: flex;
            justify-content: space-between;
            font-weight: 700;
            margin: 0 20px;
            padding: 20px 0 10px;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            align-items: center
        }

        .SprdMain .sprd-burgermenu__close {
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            padding: .5em .25em .5em 1.75em
        }

        .SprdMain .sprd-burgermenu__close-icon {
            display: block;
            width: .9286em;
            height: .9286em
        }

        .SprdMain .sprd-burgermenu__title {
            font-size: 1.286em;
            font-weight: 700;
            vertical-align: middle;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            text-decoration: none;
            color: inherit;
            flex: 1 1 auto
        }

        .SprdMain .sprd-burgermenu__title img {
            max-width: 100%;
            max-height: 50px
        }

        .SprdMain .sprd-burgermenu__navigation {
            list-style: none;
            padding: 0;
            margin: 0 0 1em;
            line-height: 2em
        }

        .SprdMain .sprd-burgermenu__item {
            border-bottom-width: 1px;
            border-bottom-style: solid
        }

        .SprdMain .sprd-burgermenu__menu-title {
            padding: 1em 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            width: 100%;
            font-weight: 700
        }

        .SprdMain .sprd-burgermenu__menu-title--active {
            padding-bottom: 0
        }

        .SprdMain .sprd-burgermenu__menu-title--active .sprd-burgermenu__menu-toggle {
            transform: rotate(180deg)
        }

        .SprdMain .sprd-burgermenu__menu-toggle {
            width: 1.8em;
            height: 1.8em;
            margin-left: auto
        }

        .SprdMain .sprd-burgermenu__subitem {
            padding-left: 1em
        }

        .SprdMain .sprd-burgermenu__subitem .sprd-link {
            padding: .25em 0
        }

        .SprdMain .sprd-burgermenu__design-icon {
            width: 1em;
            height: 1em;
            margin-right: .5em;
            vertical-align: -.125em
        }

        .SprdMain .sprd-burgermenu__footer {
            list-style: none;
            padding: 0;
            margin: 0;
            line-height: 2em
        }

        .SprdMain .sprd-burgermenu__footer-item {
            margin: 1em 0
        }

        .SprdMain .sprd-header {
            display: flex;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none
        }

        .SprdMain .sprd-header__burgerbutton {
            padding: 0 10px;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            flex-direction: column;
            justify-content: center
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-header__burgerbutton {
                display: none
            }
        }

        .SprdMain .sprd-header__burgerbutton__bar {
            border-radius: 1px;
            width: 24px;
            height: 3px;
            margin-top: 4px
        }

        .SprdMain .sprd-header__burgerbutton__bar:first-child {
            margin-top: 0
        }

        .SprdMain .sprd-header__title {
            flex: 1;
            overflow: hidden;
            white-space: nowrap;
            text-decoration: none;
            color: inherit;
            font-weight: 700;
            font-size: 1.25em;
            line-height: 58px;
            vertical-align: middle;
            text-overflow: ellipsis
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-header__title {
                font-size: 1.5em
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-header__title {
                padding-left: 20px;
                font-size: 1.75em
            }
        }

        .SprdMain .sprd-header__image {
            display: flex;
            flex: 1;
            justify-content: center;
            padding: 10px 0
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-header__image {
                justify-content: flex-start;
                padding-left: 20px
            }
        }

        .SprdMain .sprd-header__image > img {
            max-width: 100%;
            max-height: 34px;
            object-fit: scale-down;
            object-position: left
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-header__image > img {
                max-height: 68px
            }
        }

        .SprdMain .sprd-header__actions {
            display: flex;
            align-items: center;
            position: relative
        }

        .SprdMain .sprd-startpage {
            position: relative;
            margin-bottom: 2em
        }

        .SprdMain .sprd-startpage .sprd__caption, .SprdMain .sprd-startpage .sprd__cta-link {
            text-align: center
        }

        .SprdMain .sprd-startpage .sprd__text {
            display: flex;
            justify-content: center
        }

        .SprdMain .sprd-startpage .sprd-button {
            min-width: 12em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage .sprd-button {
                font-size: .875em
            }
        }

        .SprdMain .sprd-startpage__spinner {
            transition: opacity .35s ease-in-out .25s;
            transition-delay: .5s
        }

        .SprdMain .sprd-startpage-teaser {
            position: relative;
            overflow: hidden
        }

        .SprdMain .sprd-startpage-teaser__link {
            display: block;
            color: inherit;
            text-decoration: none;
            cursor: pointer
        }

        .SprdMain .sprd-startpage-teaser__plain-image {
            display: block;
            max-width: 100%;
            margin: 0 auto
        }

        .SprdMain .sprd-startpage-teaser__image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: #e5e5e5 no-repeat 50%/cover
        }

        .SprdMain .sprd-startpage-teaser__content {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: relative;
            min-height: 20em;
            padding: 0 2.125em
        }

        .SprdMain .sprd-startpage-teaser__caption {
            margin: 0;
            font-size: 2em;
            text-align: center
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-teaser__caption {
                font-size: 2.813em
            }
        }

        .SprdMain .sprd-startpage-teaser__subcaption {
            margin-top: 1em;
            font-weight: 600;
            line-height: 1.4;
            text-align: center
        }

        .SprdMain .sprd-startpage-teaser__cta {
            margin-top: 1.5em
        }

        .SprdMain .sprd-startpage-teaser__cta:first-child {
            margin-top: 0
        }

        .SprdMain .sprd-startpage-teaser .sprd-search-form {
            width: 100%;
            margin-top: 1.5em
        }

        .SprdMain .sprd-startpage-teaser .sprd-search-form__input {
            border: 1px solid #d0d0d0;
            border-right-width: 0
        }

        .SprdMain .sprd-startpage-promotion {
            margin: 3.5em 0 2em;
            display: flex;
            justify-content: center;
            min-height: 225px;
            padding: 1rem;
            box-sizing: border-box
        }

        .SprdMain .sprd-startpage-promotion:first-child {
            margin-top: .5em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-promotion {
                margin: 3.125em 0 2em
            }
        }

        .SprdMain .sprd-startpage-promotion__center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .SprdMain .sprd-startpage-promotion__caption {
            font-size: 2em;
            margin: 0 0 .25em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-promotion__caption {
                font-size: 3em
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-startpage-promotion__caption {
                font-size: 4em
            }
        }

        .SprdMain .sprd-startpage-promotion__button {
            justify-content: center;
            display: flex;
            align-items: center;
            line-height: 1em
        }

        .SprdMain .sprd-startpage-collection-preview {
            margin: 3.5em 2em 2em
        }

        .SprdMain .sprd-startpage-collection-preview:first-child {
            margin-top: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-collection-preview {
                margin: 3.125em 1em 2em
            }
        }

        .SprdMain .sprd-startpage-collection-preview__cta {
            margin-top: .5em;
            text-align: center
        }

        .SprdMain .sprd-startpage-cols {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between
        }

        .SprdMain .sprd-startpage-col {
            display: flex;
            flex-direction: column;
            width: 100%;
            padding-bottom: 1em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-col {
                width: calc(50% - 9px)
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-startpage-col {
                width: calc(33.33333% - 18px)
            }
        }

        .SprdMain .sprd-startpage-col__name {
            text-align: center
        }

        .SprdMain .sprd-startpage-col__image {
            position: relative;
            display: block
        }

        .SprdMain .sprd-startpage-col__image:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-startpage-col__small-col {
            display: flex;
            margin-top: 9px
        }

        .SprdMain .sprd-startpage-col__small-col .sprd-startpage-col__image {
            width: calc(33.3333% - 6px)
        }

        .SprdMain .sprd-startpage-col__small-col .sprd-startpage-col__image + .sprd-startpage-col__image {
            margin-left: 9px
        }

        .SprdMain .sprd-startpage-col__designCount {
            border: 0
        }

        .SprdMain .sprd-startpage-col__designCount:before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: inherit;
            opacity: .7
        }

        .SprdMain .sprd-startpage-col__designCountLabel {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font-size: 1.75em;
            font-weight: 700;
            white-space: nowrap
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-col__link {
                font-size: 1em
            }
        }

        .SprdMain .sprd-startpage-preview-tiles {
            margin: 3.5em 2em 2em
        }

        .SprdMain .sprd-startpage-preview-tiles:first-child {
            margin-top: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-preview-tiles {
                margin: 3.125em 1em 2em
            }
        }

        .SprdMain .sprd-startpage-preview-tiles__caption {
            flex: 0 1 auto;
            word-break: break-word
        }

        .SprdMain .sprd-startpage-preview-tiles__previews {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            position: relative;
            margin: 0 -.5em .5em
        }

        .SprdMain .sprd-startpage-preview-tiles__cta {
            text-align: center
        }

        .SprdMain .sprd-startpage-preview-tiles__preview {
            width: 50%;
            box-sizing: border-box;
            padding: 0 .5em;
            margin-bottom: 1em;
            color: inherit;
            text-decoration: none
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-startpage-preview-tiles__preview--5row {
                width: 20%
            }

            .SprdMain .sprd-startpage-preview-tiles__preview--5row:nth-child(6) {
                display: none
            }
        }

        @media screen and (min-width: 768px)and (max-width: 999px) {
            .SprdMain .sprd-startpage-preview-tiles__preview--5row {
                width: 33%
            }

            .SprdMain .sprd-startpage-preview-tiles__preview--5row:nth-child(10) {
                display: none
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-startpage-preview-tiles__preview--4row {
                width: 25%
            }
        }

        @media screen and (min-width: 768px)and (max-width: 999px) {
            .SprdMain .sprd-startpage-preview-tiles__preview--4row {
                width: 33%
            }

            .SprdMain .sprd-startpage-preview-tiles__preview--4row:nth-child(n+7) {
                display: none
            }
        }

        .SprdMain .sprd-startpage-preview-tiles__image {
            position: relative
        }

        .SprdMain .sprd-startpage-preview-tiles__image:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-startpage-preview-tiles__text {
            display: none
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-preview-tiles__text {
                display: block;
                font-size: .875em;
                margin-top: .5em;
                line-height: 1.5;
                text-align: center
            }
        }

        .SprdMain .sprd-startpage-preview-tiles__name {
            overflow: hidden;
            max-height: 4.5em;
            word-break: break-word
        }

        .SprdMain .sprd-startpage-about-us {
            padding-top: 2em;
            margin: 3.5em 2em 2em
        }

        .SprdMain .sprd-startpage-about-us:first-child {
            margin-top: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-about-us {
                margin: 3.125em 1em 2em
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-about-us {
                display: flex;
                align-items: center
            }
        }

        .SprdMain .sprd-startpage-about-us__caption {
            margin: 0
        }

        .SprdMain .sprd-startpage-about-us__textsection {
            max-width: 35em;
            margin: 0 auto;
            padding: 0
        }

        .SprdMain .sprd-startpage-about-us__textsection:first-child {
            text-align: center
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-about-us__textsection {
                flex: 0 1 35em;
                min-width: 22em;
                max-width: none;
                padding: 0 2em 0 1em
            }
        }

        .SprdMain .sprd-startpage-about-us__cta {
            margin-top: 1.5em;
            text-align: center
        }

        .SprdMain .sprd-startpage-trust-elements {
            margin: 3.5em 2em 2em
        }

        .SprdMain .sprd-startpage-trust-elements:first-child {
            margin-top: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-trust-elements {
                margin: 3.125em 1em 2em
            }
        }

        .SprdMain .sprd-startpage-trust-elements__section {
            display: flex;
            align-items: center
        }

        .SprdMain .sprd-startpage-trust-elements__section + .sprd-startpage-trust-elements__section {
            margin-top: .875em
        }

        .SprdMain .sprd-startpage-trust-elements__textsection {
            margin-left: 1.5em
        }

        .SprdMain .sprd-startpage-trust-elements__image {
            flex: none;
            width: 4.325em;
            height: 4.325em
        }

        .SprdMain .sprd-startpage-trust-elements__subcaption {
            margin-bottom: .25em
        }

        .SprdMain .sprd-startpage-trust-elements__text {
            font-size: .875em;
            line-height: 1.4
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-trust-elements__sections {
                display: flex
            }

            .SprdMain .sprd-startpage-trust-elements__section {
                display: block;
                flex: 1;
                text-align: center
            }

            .SprdMain .sprd-startpage-trust-elements__section + .sprd-startpage-trust-elements__section {
                margin-top: 0
            }

            .SprdMain .sprd-startpage-trust-elements__image {
                margin: 0 auto
            }

            .SprdMain .sprd-startpage-trust-elements__textsection {
                max-width: 300px;
                margin: 0 auto;
                padding: 0 1em
            }

            .SprdMain .sprd-startpage-trust-elements__subcaption {
                margin: .889em 0 .444em;
                text-align: center
            }

            .SprdMain .sprd-startpage-trust-elements__text {
                font-size: 1em
            }
        }

        .SprdMain .sprd-startpage-product-type-categories {
            margin: 3.5em 2em 2em
        }

        .SprdMain .sprd-startpage-product-type-categories:first-child {
            margin-top: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-product-type-categories {
                margin: 3.125em 1em 2em
            }
        }

        .SprdMain .sprd-startpage-product-type-categories__caption {
            word-break: break-word
        }

        .SprdMain .sprd-startpage-product-type-categories__list {
            display: flex;
            flex-wrap: wrap;
            align-items: flex-end;
            justify-content: center;
            width: 100%
        }

        .SprdMain .sprd-startpage-product-type-categories__category {
            flex: 0 1 auto;
            width: 100%;
            max-width: 500px;
            display: flex;
            flex-direction: column;
            margin-bottom: 1em;
            color: inherit;
            text-decoration: none
        }

        @media screen and (min-width: 350px) {
            .SprdMain .sprd-startpage-product-type-categories__category {
                width: calc(50% - 1em)
            }

            .SprdMain .sprd-startpage-product-type-categories__category:nth-child(2n) {
                margin-left: 2em
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-product-type-categories__category {
                width: calc(33% - 1.33em)
            }

            .SprdMain .sprd-startpage-product-type-categories__category:nth-child(3n+3) {
                margin-left: 2em
            }
        }

        @media screen and (min-width: 1200px) {
            .SprdMain .sprd-startpage-product-type-categories__category {
                width: calc(25% - 1.5em)
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-product-type-categories__list--items4 .sprd-startpage-product-type-categories__category {
                width: calc(25% - 1.5em)
            }
        }

        .SprdMain .sprd-startpage-product-type-categories__sub-caption {
            text-align: center
        }

        .SprdMain .sprd-startpage-product-type-categories__department, .SprdMain .sprd-startpage-product-type-categories__name {
            display: inline-block;
            max-width: 100%;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap
        }

        .SprdMain .sprd-startpage-product-type-categories__image {
            position: relative;
            display: block
        }

        .SprdMain .sprd-startpage-product-type-categories__image:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-startpage-product-type-categories__link {
            text-align: center
        }

        .SprdMain .sprd-startpage-product-type-categories__link__icon {
            width: 1em;
            height: 1em;
            vertical-align: middle;
            transform: rotate(-90deg)
        }

        .SprdMain .sprd-startpage-product-type-categories__cta {
            text-align: center
        }

        .SprdMain .sprd-startpage-dewipro {
            margin: 3.5em 2em 2em
        }

        .SprdMain .sprd-startpage-dewipro:first-child {
            margin-top: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-dewipro {
                margin: 3.125em 1em 2em
            }
        }

        .SprdMain .sprd-startpage-dewipro__section {
            max-width: 1270px
        }

        .SprdMain .sprd-startpage-dewipro__section + .sprd-startpage-dewipro__section {
            margin-top: 2em
        }

        .SprdMain .sprd-startpage-dewipro__images {
            display: flex;
            flex-wrap: wrap
        }

        .SprdMain .sprd-startpage-dewipro__design {
            flex: 1 0 auto;
            flex-basis: calc(40% + 0.5em);
            margin-bottom: 1em;
            box-sizing: border-box
        }

        .SprdMain .sprd-startpage-dewipro__products {
            flex: 1 0 auto;
            flex-basis: calc(60% - 0.5em);
            display: flex;
            flex-wrap: wrap;
            align-items: flex-start;
            align-content: space-between;
            justify-content: space-between;
            margin: -1em 0 1em
        }

        .SprdMain .sprd-startpage-dewipro__large-img {
            display: block;
            min-width: 265px;
            max-width: 500px
        }

        .SprdMain .sprd-startpage-dewipro__img {
            flex: 0 0 auto;
            flex-basis: calc(50% - 0.6666em);
            min-width: 125px;
            margin-top: 1em
        }

        .SprdMain .sprd-startpage-dewipro__img, .SprdMain .sprd-startpage-dewipro__large-img {
            position: relative
        }

        .SprdMain .sprd-startpage-dewipro__img:before, .SprdMain .sprd-startpage-dewipro__large-img:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-startpage-dewipro__more {
            align-items: center;
            justify-content: center;
            display: flex
        }

        .SprdMain .sprd-startpage-dewipro__more:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-startpage-dewipro__more-link {
            text-decoration: none;
            color: inherit;
            cursor: pointer;
            text-align: center
        }

        .SprdMain .sprd-startpage-dewipro__more-link:hover {
            border-color: inherit
        }

        .SprdMain .sprd-startpage-dewipro__more-count, .SprdMain .sprd-startpage-dewipro__more-prefix, .SprdMain .sprd-startpage-dewipro__more-suffix {
            display: block
        }

        .SprdMain .sprd-startpage-dewipro__more-prefix {
            font-size: 1.125em
        }

        .SprdMain .sprd-startpage-dewipro__more-count {
            padding-bottom: .125em;
            font-weight: 700;
            font-size: 1.125em
        }

        .SprdMain .sprd-startpage-dewipro__more-suffix {
            font-size: .875em
        }

        .SprdMain .sprd-startpage-dewipro__more-icon {
            display: block;
            border-radius: 100%;
            width: 1.625em;
            height: 1.625em;
            padding: .5em;
            margin: 1em auto 0
        }

        .SprdMain .sprd-startpage-dewipro__button {
            margin-top: .5em;
            text-align: center
        }

        @media screen and (min-width: 479px) {
            .SprdMain .sprd-startpage-dewipro__img {
                flex: 0 0 auto;
                flex-basis: calc(33.3333% - 0.6666em)
            }
        }

        @media screen and (min-width: 549px) {
            .SprdMain .sprd-startpage-dewipro__design {
                padding-right: 1em
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-startpage-dewipro__more-prefix {
                font-size: 1.25em
            }

            .SprdMain .sprd-startpage-dewipro__more-count {
                font-size: 1.75em
            }

            .SprdMain .sprd-startpage-dewipro__more-suffix {
                font-size: 1em
            }
        }

        .SprdMain .sprd-startpage-follow-us {
            margin: 3.5em 2em 2em
        }

        .SprdMain .sprd-startpage-follow-us:first-child {
            margin-top: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-follow-us {
                margin: 3.125em 1em 2em
            }
        }

        .SprdMain .sprd-startpage-follow-us .sprd-social-bar {
            padding: 0
        }

        .SprdMain .sprd-startpage-follow-us__text {
            max-width: 50em;
            margin: 0 auto;
            text-align: center
        }

        .SprdMain .sprd-startpage-cyo-intro {
            margin: 3.5em 2em 2em
        }

        .SprdMain .sprd-startpage-cyo-intro:first-child {
            margin-top: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-startpage-cyo-intro {
                margin: 3.125em 1em 2em
            }
        }

        .SprdMain .sprd-startpage-cyo-intro__text {
            max-width: 50em;
            margin: 0 auto;
            text-align: center
        }

        .SprdMain .sprd-startpage-cyo-intro__steps {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between
        }

        .SprdMain .sprd-startpage-cyo-intro__step {
            width: 100%;
            max-width: 500px;
            margin: 0 auto
        }

        .SprdMain .sprd-startpage-cyo-intro__step__text {
            margin: .5em 10% 1em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-cyo-intro__step {
                width: calc(50% - 1em)
            }

            .SprdMain .sprd-startpage-cyo-intro__step:first-child, .SprdMain .sprd-startpage-cyo-intro__step:nth-child(2) {
                margin: 0
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-startpage-cyo-intro__step {
                width: calc(33.333% - 1em)
            }

            .SprdMain .sprd-startpage-cyo-intro__step:nth-child(3) {
                margin: 0
            }
        }

        .SprdMain .sprd-startpage-cyo-intro__icon-wrap {
            position: relative;
            padding-top: 72.5378%;
            background: #fff
        }

        .SprdMain .sprd-startpage-cyo-intro__icon {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0
        }

        .SprdMain .sprd-startpage-cyo-intro__button-section {
            text-align: center
        }

        .SprdMain .sprd-basket-page {
            margin: 0 10px 20px
        }

        .SprdMain .sprd-basket-empty__text {
            text-align: center;
            padding: 2em;
            margin: 0 0 1.25em
        }

        .SprdMain .sprd-basket-empty__button {
            display: flex;
            justify-content: center;
            margin: 0 0 3em;
            font-size: 1em
        }

        .SprdMain .sprd-basket__headline {
            margin: 0
        }

        .SprdMain .sprd-basket__content {
            max-width: 1050px
        }

        .SprdMain .sprd-basket__items {
            flex: 1
        }

        .SprdMain .sprd-basket-item {
            display: flex;
            padding: .5em 0 1.5em;
            border-bottom-style: solid;
            border-bottom-width: 1px
        }

        .SprdMain .sprd-basket-item__image {
            position: relative;
            display: flex;
            align-self: flex-start;
            width: 150px;
            max-width: 33.3333%;
            margin-top: 1em;
            overflow: hidden;
            border: 1px solid
        }

        .SprdMain .sprd-basket-item__image:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-basket-item__info {
            flex: 1;
            margin-left: 10px;
            display: flex;
            flex-wrap: wrap
        }

        .SprdMain .sprd-basket-item__info__col {
            margin-top: 1em
        }

        .SprdMain .sprd-basket-item__info__col:first-child {
            flex: 1 0 auto;
            max-width: 100%
        }

        .SprdMain .sprd-basket-item__info__col:nth-child(2) {
            margin-left: auto;
            margin-bottom: 1em;
            padding-left: 1.5em
        }

        .SprdMain .sprd-basket-item__info__col:nth-child(3) {
            width: 100%;
            display: flex;
            align-items: flex-end;
            justify-content: flex-end
        }

        .SprdMain .sprd-basket-item__product-type {
            text-decoration: none;
            color: inherit
        }

        .SprdMain .sprd-basket-item__product-type:hover {
            text-decoration: underline
        }

        .SprdMain .sprd-basket-item__appearance, .SprdMain .sprd-basket-item__size {
            margin-top: .25em
        }

        .SprdMain .sprd-basket-prices {
            margin: 20px 0 10px
        }

        .SprdMain .sprd-basket-prices__row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 1em
        }

        .SprdMain .sprd-basket-prices__promo, .SprdMain .sprd-basket-prices__promo-info {
            margin-top: 1em
        }

        .SprdMain .sprd-basket-prices__promo {
            display: flex;
            align-items: flex-end;
            flex-wrap: wrap;
            padding-bottom: 5px
        }

        .SprdMain .sprd-basket-prices__promo__text {
            flex: 1 0 auto;
            margin-right: 1em
        }

        .SprdMain .sprd-basket-prices__promo__countdown {
            margin-right: .5em
        }

        .SprdMain .sprd-basket-prices__promo__button {
            margin: 0 0 -3px auto;
            padding: .125em .5em;
            font: inherit;
            border-radius: .125em
        }

        .SprdMain .sprd-basket-prices__free-shipping-hint {
            position: relative;
            margin-top: 1em;
            padding: .75em;
            text-align: center;
            font-size: .75em;
            font-weight: 700;
            white-space: normal
        }

        .SprdMain .sprd-basket-prices__free-shipping-hint:before {
            content: "";
            position: absolute;
            top: -.4em;
            right: 2em;
            transform: rotate(45deg);
            width: 16px;
            height: 16px;
            background: inherit
        }

        .SprdMain .sprd-basket-checkout {
            margin: 0 -10px;
            padding: 10px
        }

        @supports ((position:-webkit-sticky) or (position:sticky)) {
            .SprdMain .sprd-basket-checkout {
                position: -webkit-sticky;
                position: sticky;
                bottom: 0;
                box-shadow: 0 -5px 4px 0 rgba(0, 0, 0, .15)
            }
        }

        .SprdMain .sprd-basket-checkout--stuck {
            box-shadow: none
        }

        .SprdMain .sprd-basket-checkout__total {
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            font-size: 1.5em
        }

        .SprdMain .sprd-basket-checkout__info {
            font-size: .75em;
            margin-top: .25em
        }

        .SprdMain .sprd-basket-checkout__vat a {
            text-decoration: none;
            color: inherit
        }

        .SprdMain .sprd-basket-checkout__vat a:hover {
            text-decoration: underline
        }

        .SprdMain .sprd-basket-checkout__shipping {
            text-decoration: none;
            margin-left: .25em;
            color: inherit
        }

        .SprdMain .sprd-basket-checkout__shipping:hover {
            text-decoration: underline
        }

        .SprdMain .sprd-basket-checkout__button {
            width: 100%;
            margin-top: 1em;
            padding: 1em
        }

        .SprdMain .sprd-basket__payment {
            display: flex;
            justify-content: center;
            padding: 10px 0
        }

        .SprdMain .sprd-basket__payment__icon {
            max-width: 3.5em;
            height: 1.375em;
            margin-left: 1em
        }

        .SprdMain .sprd-basket__payment__icon:first-child {
            margin-left: 0
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-basket-item:last-child {
                border-bottom: 0
            }

            .SprdMain .sprd-basket-item__info {
                margin-left: 20px
            }

            .SprdMain .sprd-basket-prices {
                margin-bottom: 0
            }

            .SprdMain .sprd-basket-checkout {
                margin: 0 -20px;
                padding: 20px
            }

            @supports (display:grid) {
                .SprdMain .sprd-basket__content {
                    display: grid;
                    grid-template:"items prices ." auto "items checkout canary" auto "items payment ." auto "items placeholder ." 1fr/auto 320px 0
                }

                .SprdMain .sprd-basket__items {
                    grid-area: items;
                    margin-right: 20px
                }

                .SprdMain .sprd-basket-prices {
                    grid-area: prices;
                    margin-top: 0;
                    padding: 7px 20px 0;
                    border-style: solid;
                    border-width: 1px 1px 0
                }

                .SprdMain .sprd-basket-checkout {
                    grid-area: checkout;
                    top: 0;
                    bottom: auto;
                    margin: 0;
                    border-style: solid;
                    border-width: 0 1px 1px;
                    box-shadow: none
                }

                .SprdMain .sprd-basket-checkout--stuck {
                    border-bottom: 0
                }

                .SprdMain .sprd-basket-checkout__button {
                    margin-top: 20px
                }

                .SprdMain .sprd-basket-checkout__canary {
                    grid-area: canary;
                    height: 1px
                }

                .SprdMain .sprd-basket__payment {
                    grid-area: payment;
                    padding: 0 20px 20px;
                    border-style: solid;
                    border-width: 0 1px 1px
                }
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-basket-page {
                margin-right: 20px;
                margin-left: 20px
            }

            @supports (display:grid) {
                .SprdMain .sprd-basket__content {
                    grid-template-columns:auto 360px 0
                }

                .SprdMain .sprd-basket__items {
                    margin-right: 40px
                }

                .SprdMain .sprd-basket-checkout, .SprdMain .sprd-basket-prices, .SprdMain .sprd-basket__payment {
                    padding-right: 40px;
                    padding-left: 40px
                }

                .SprdMain .sprd-basket-prices {
                    margin-top: 8px;
                    padding-top: 22px
                }

                .SprdMain .sprd-basket__payment {
                    padding-bottom: 40px
                }
            }
        }

        .SprdMain .sprd-breadcrumb {
            list-style: none;
            margin: 10px;
            padding: 0;
            font-size: .75em;
            line-height: normal;
            text-transform: uppercase;
            overflow: auto
        }

        .SprdMain .sprd-breadcrumb, .SprdMain .sprd-breadcrumb__item {
            display: flex;
            align-items: center
        }

        .SprdMain .sprd-breadcrumb__item:nth-child(n+3):nth-last-child(n+3) {
            display: none
        }

        .SprdMain .sprd-breadcrumb__item:nth-child(2):nth-last-child(n+3):after {
            content: "..."
        }

        .SprdMain .sprd-breadcrumb__item:nth-child(2):nth-last-child(n+3) .sprd-breadcrumb__link {
            display: none
        }

        .SprdMain .sprd-breadcrumb__link {
            color: inherit;
            text-decoration: none
        }

        .SprdMain .sprd-breadcrumb__divider {
            width: 1.25em;
            height: 1.25em;
            margin: 0 1px -1px
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-breadcrumb {
                margin: 20px;
                font-size: .875em
            }
        }

        .SprdMain .sprd-listpage {
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            margin-bottom: 40px;
            font-size: .875em
        }

        .SprdMain .sprd-listpage__header {
            margin: 0 10px
        }

        .SprdMain .sprd-listpage__title {
            width: 100%;
            font-weight: 700;
            margin: 0 0 .67em;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .SprdMain .sprd-listpage__subtitle {
            font-weight: 700
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-listpage, .SprdMain .sprd-listpage__header {
                margin-left: 10px
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-listpage, .SprdMain .sprd-listpage__header {
                margin-left: 20px
            }
        }

        .SprdMain .sprd-activefilters-lp {
            box-sizing: border-box;
            flex: 0 0 100%;
            display: flex;
            flex-wrap: wrap;
            line-height: 1.5;
            padding: 0 10px
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-activefilters-lp {
                font-size: .857em;
                justify-content: space-between
            }
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-activefilters-lp__title {
                display: none
            }
        }

        .SprdMain .sprd-activefilters-lp__item {
            display: flex;
            align-items: center;
            margin-left: 1em;
            text-decoration: none;
            color: inherit
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-activefilters-lp__item {
                width: 48%;
                margin: 0 0 .75em
            }
        }

        .SprdMain .sprd-activefilters-lp__item-icon {
            width: .8571em;
            height: .8571em;
            margin: -2px 0 2px .55em
        }

        .SprdMain .sprd-activefilters-lp__itemtext {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%
        }

        .SprdMain .sprd-activefilters-lp__reset {
            text-decoration: underline;
            color: inherit;
            margin-left: 2em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-activefilters-lp__reset {
                width: 48%;
                margin: 0 0 .75em
            }
        }

        .SprdMain .sprd-activefilters-lp__reset:hover {
            text-decoration: underline
        }

        .SprdMain .sprd-activefilters-mobile {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 100%;
            padding-top: 1.25em;
            padding-bottom: .5em;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            line-height: 1.5
        }

        .SprdMain .sprd-activefilters-mobile__item {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            margin-bottom: .75em;
            width: 48%
        }

        .SprdMain .sprd-activefilters-mobile__item-icon {
            flex: none;
            width: .8571em;
            height: .8571em;
            margin-left: .5em
        }

        .SprdMain .sprd-activefilters-mobile__itemtext {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            max-width: 100%
        }

        .SprdMain .sprd-activefilters-mobile__reset {
            padding: 0;
            font: inherit;
            text-align: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            text-decoration: underline;
            color: inherit;
            margin: 0 0 .75em;
            width: 48%
        }

        .SprdMain .sprd-activefilters-mobile__reset:hover {
            text-decoration: underline
        }

        .SprdMain .sprd-listpage-size-filter {
            list-style: none;
            width: calc(33.3333% - 8px);
            margin: 0 0 8px 8px
        }

        @media screen and (min-width: 1100px) {
            .SprdMain .sprd-listpage-size-filter {
                width: calc(25% - 8px)
            }
        }

        .SprdMain .sprd-listpage-size-filter--full-width {
            width: 100%
        }

        .SprdMain .sprd-listpage-size-filter:hover {
            box-shadow: inset 0 0 0 1px
        }

        .SprdMain .sprd-listpage-size-filter__link {
            padding: 0;
            font: inherit;
            text-align: center;
            color: inherit;
            background: none;
            cursor: pointer;
            outline: none;
            display: block;
            width: 100%;
            line-height: inherit;
            text-decoration: none;
            border: 1px solid;
            box-sizing: border-box
        }

        .SprdMain .sprd-listpage-color-filter {
            list-style: none;
            flex-grow: 0;
            align-items: flex-start;
            justify-content: flex-start
        }

        .SprdMain .sprd-listpage-color-filter__link {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none
        }

        .SprdMain .sprd-listpage-color-filter .sprd-color-circle {
            width: 30px;
            height: 30px
        }

        .SprdMain .sprd-filterpane {
            flex: 0 0 20%;
            padding-right: 1em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-filterpane {
                display: none
            }
        }

        .SprdMain .sprd-filterpane__filterlist {
            list-style: none;
            padding: 0;
            margin: 0;
            line-height: 2em
        }

        .SprdMain .sprd-filterpane__sizelist {
            display: flex;
            flex-flow: wrap;
            padding: 0;
            margin: 0 0 0 -8px
        }

        .SprdMain .sprd-filterpane__colorlist {
            display: flex;
            flex-direction: row;
            flex-flow: wrap;
            padding: 0;
            margin: 0
        }

        .SprdMain .sprd-filterpane-section {
            line-height: 2em;
            border-bottom-width: 1px;
            border-bottom-style: solid
        }

        .SprdMain .sprd-filterpane-section:first-child {
            border-top-width: 1px;
            border-top-style: solid
        }

        .SprdMain .sprd-filterpane-section__toggle {
            height: 1.5em;
            width: 1.5em
        }

        .SprdMain .sprd-filterpane-section--expanded .sprd-filterpane-section__toggle {
            transform: rotate(180deg)
        }

        .SprdMain .sprd-filterpane-section__title {
            padding: 1em 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%
        }

        .SprdMain .sprd-filterpane-section__filters {
            padding-bottom: 1em
        }

        .SprdMain .sprd-filterpane-section__level1 {
            margin: 0
        }

        .SprdMain .sprd-filterpane-section__level2 {
            margin: 0 1em
        }

        .SprdMain .sprd-filterpane-section__level2:first-child {
            margin-top: .25em
        }

        .SprdMain .sprd-filterpane-section__level2:last-child {
            margin-bottom: .25em
        }

        .SprdMain .sprd-mobilefilter {
            margin-bottom: 1em
        }

        .SprdMain .sprd-mobilefilter--loading .sprd-activefilters-mobile, .SprdMain .sprd-mobilefilter--loading .sprd-mobilefilter-section__filters {
            pointer-events: none
        }

        .SprdMain .sprd-mobilefilter__filterlist {
            list-style: none;
            padding: 0;
            margin: 0;
            line-height: 2em
        }

        .SprdMain .sprd-mobilefilter__open-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            min-width: 10em;
            height: 2.75em;
            margin: 0 auto;
            padding: 0;
            font-weight: 600
        }

        .SprdMain .sprd-mobilefilter__open-btn__icon {
            width: 1.2em;
            height: 1.2em;
            margin-right: .5em
        }

        .SprdMain .sprd-mobilefilter__open-btn:empty {
            visibility: hidden
        }

        .SprdMain .sprd-mobilefilter__modal {
            display: flex;
            flex-direction: column;
            position: fixed;
            height: 100%;
            width: 100%;
            left: 0;
            top: 0;
            z-index: 30
        }

        .SprdMain .sprd-mobilefilter__header {
            display: flex;
            flex: none;
            margin: 20px 20px 0;
            padding-bottom: 1em;
            border-bottom-width: 1px;
            border-bottom-style: solid
        }

        .SprdMain .sprd-mobilefilter__header .sprd-mobilefilter__spinner {
            margin-left: 1em
        }

        .SprdMain .sprd-mobilefilter__title {
            font-weight: 700;
            font-size: 1.25em
        }

        .SprdMain .sprd-mobilefilter__close {
            padding: .2857em .25em .3571em 1.75em;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            margin-left: auto
        }

        .SprdMain .sprd-mobilefilter__close-icon {
            display: block;
            width: .9286em;
            height: .9286em
        }

        .SprdMain .sprd-mobilefilter__spinner {
            flex: none;
            align-self: center;
            width: .5em;
            height: .5em;
            position: absolute;
            left: 1em;
            opacity: 0;
            border-width: 2.5px;
            transition: opacity .25s ease-in-out .25s
        }

        .SprdMain .sprd-mobilefilter__header-close {
            display: flex;
            width: 100%;
            justify-content: flex-end
        }

        .SprdMain .sprd-mobilefilter__scroll {
            padding: 0 20px;
            flex: 1;
            overflow: auto
        }

        .SprdMain .sprd-mobilefilter__footer {
            flex: none;
            padding: 1.25em 1em;
            box-shadow: 0 -2px 5px rgba(0, 0, 0, .12), 0 -1px 2px rgba(0, 0, 0, .16)
        }

        .SprdMain .sprd-mobilefilter__close-btn {
            position: relative;
            width: 100%;
            min-height: 2.75em;
            text-decoration: none;
            display: flex;
            justify-content: center
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-mobilefilter {
                display: none
            }
        }

        .SprdMain .sprd-mobilefilter-section {
            line-height: 2em;
            border-bottom-width: 1px;
            border-bottom-style: solid
        }

        .SprdMain .sprd-mobilefilter-section__toggle {
            height: 1.5em;
            width: 1.5em;
            margin-left: .5em
        }

        .SprdMain .sprd-mobilefilter-section__title {
            padding: 1em 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            line-height: inherit;
            text-align: left
        }

        .SprdMain .sprd-mobilefilter-section__label {
            flex: 1;
            font-weight: 700;
            width: 100%;
            font-size: 1em;
            margin: 0
        }

        .SprdMain .sprd-mobilefilter-section__subtitle {
            font-size: .857em;
            margin-left: .5em;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .SprdMain .sprd-mobilefilter-section__filters {
            padding-bottom: 1em
        }

        .SprdMain .sprd-mobilefilter-section__level1 {
            margin: 0;
            min-height: 2.2em
        }

        .SprdMain .sprd-mobilefilter-section__level2 {
            margin: 0 1em;
            min-height: 2.2em
        }

        .SprdMain .sprd-mobilefilter-section__level2:first-child {
            margin-top: .25em
        }

        .SprdMain .sprd-mobilefilter-section__level2:last-child {
            margin-bottom: .25em
        }

        .SprdMain .sprd-mobilefilter-section__link {
            padding: 0;
            font: inherit;
            text-align: inherit;
            background: none;
            cursor: pointer;
            outline: none;
            border-width: 0 0 2px
        }

        .SprdMain .sprd-mobilefilter-section .sprd-color-circle {
            width: 48px;
            height: 48px
        }

        .SprdMain .sprd-mobilefilter-section:last-child {
            border-bottom: 0
        }

        .SprdMain .sprd-product-list {
            flex: 1 1 1px;
            display: flex;
            min-height: 70vh;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-content: flex-start;
            align-items: flex-start
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-product-list {
                padding: 5px
            }
        }

        .SprdMain .sprd-product-list__empty-shop {
            margin: 5em 0 15em;
            flex: 1;
            text-align: center
        }

        .SprdMain .sprd-product-list__empty-shop-icon {
            width: 350px;
            margin: .5em 0 2em
        }

        @media (max-width: 767px) {
            .SprdMain .sprd-product-list__empty-shop {
                font-size: .875em;
                padding: 30px
            }

            .SprdMain .sprd-product-list__empty-shop-icon {
                width: 250px
            }
        }

        .SprdMain .sprd-product-list__no-search-result {
            margin: 5em 0;
            height: 20vh;
            flex: 1;
            text-align: center
        }

        .SprdMain .sprd-product-list--loading {
            align-content: center
        }

        .SprdMain .sprd-product-list--loading .sprd-product-list-item {
            pointer-events: none;
            opacity: 0
        }

        .SprdMain .sprd-product-list__spinner {
            margin: 0
        }

        .SprdMain .sprd-product-list__spinner-container {
            position: fixed;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%)
        }

        .SprdMain .sprd-product-list-item {
            margin: 0 10px 20px;
            padding: 10px;
            border: 1px solid transparent;
            box-sizing: border-box;
            transition: border, box-shadow .2s ease-out, opacity .25s ease-in-out .35s
        }

        @media screen and (max-width: 349px) {
            .SprdMain .sprd-product-list-item {
                width: 100%
            }
        }

        @media screen and (min-width: 350px) {
            .SprdMain .sprd-product-list-item {
                width: calc(50% - 10px)
            }
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-product-list-item {
                margin: 0 5px 20px;
                padding: 5px
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-product-list-item {
                width: calc(33% - 20px)
            }
        }

        @media screen and (min-width: 1200px) {
            .sprd-product-list--4cols .sprd-product-list-item {
                width: calc(25% - 20px)
            }
        }

        .SprdMain .sprd-product-list-item__hoverarea {
            width: 100%;
            position: relative
        }

        .SprdMain .sprd-product-list-item--hover {
            box-shadow: 3px 3px 8px rgba(0, 0, 0, .12), 0 1px 4px rgba(0, 0, 0, .16);
            transition: .1s ease-in
        }

        .SprdMain .sprd-product-list-item--hover .sprd-product-list-item__sizes {
            opacity: 1
        }

        .SprdMain .sprd-product-list-item--stockout {
            pointer-events: none;
            position: relative
        }

        .SprdMain .sprd-product-list-item--stockout .sprd-product-list-item__image, .SprdMain .sprd-product-list-item--stockout .sprd-product-list-item__price, .SprdMain .sprd-product-list-item--stockout .sprd-product-list-item__title {
            opacity: .5
        }

        .SprdMain .sprd-product-list-item--stockout .sprd-appearance-list__appearance {
            pointer-events: all
        }

        .SprdMain .sprd-product-list-item__link {
            display: block;
            width: 100%;
            text-decoration: none;
            color: inherit;
            margin-bottom: .25em
        }

        .SprdMain .sprd-product-list-item__image {
            display: flex;
            width: 100%;
            overflow: hidden;
            position: relative
        }

        .SprdMain .sprd-product-list-item__image:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-product-list-item__new-badge {
            position: absolute;
            top: 0;
            left: 0;
            padding: .5em .7em;
            font-size: .857em;
            font-weight: 700
        }

        .SprdMain .sprd-product-list-item__sizes {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            font-weight: 400;
            font-size: .857em;
            list-style: none;
            width: 100%;
            padding: 0;
            margin: .25em 0;
            opacity: 0;
            transition: opacity .25s ease-in-out
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-product-list-item__sizes {
                display: none
            }
        }

        @media (hover: none) {
            .SprdMain .sprd-product-list-item__sizes {
                display: none
            }
        }

        .SprdMain .sprd-product-list-item__size {
            margin: 0 .4em;
            white-space: nowrap
        }

        .SprdMain .sprd-product-list-item__size:focus {
            outline: none
        }

        .SprdMain .sprd-product-list-item__size--stockout {
            text-decoration: line-through
        }

        .SprdMain .sprd-product-list-item__title {
            margin: .25em 0;
            text-align: center;
            flex: 1 0 auto;
            line-height: 1.428em;
            text-overflow: ellipsis;
            overflow: hidden;
            width: 100%
        }

        .SprdMain .sprd-product-list-item__stockout {
            padding: .5em;
            margin: 1em;
            font-weight: 700;
            text-align: center;
            color: #e2122f;
            background-color: #f9bac3
        }

        .SprdMain .sprd-product-list-item__stockout--current-appearance {
            position: absolute;
            bottom: 0;
            right: 1em;
            left: 1em;
            margin: 0
        }

        .SprdMain .sprd-product-list-item__num-products {
            opacity: .4;
            text-overflow: ellipsis;
            overflow: hidden;
            width: 100%;
            text-align: center;
            margin: .5em 0 0
        }

        .SprdMain .sprd-product-list-item__price {
            font-weight: 700;
            text-overflow: ellipsis;
            overflow: hidden;
            width: 100%;
            text-align: center;
            margin: .25em 0
        }

        .SprdMain .sprd-pagination {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            margin: 40px 0;
            justify-content: center
        }

        @media screen and (max-width: 500px) {
            .SprdMain .sprd-pagination {
                justify-content: space-evenly
            }
        }

        .SprdMain .sprd-pagination--hidden {
            opacity: 0;
            pointer-events: none;
            cursor: pointer
        }

        .SprdMain .sprd-pagination--firstlastpage {
            display: none
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-pagination--firstlastpage {
                display: inline
            }
        }

        .SprdMain .sprd-pagination__pages {
            display: flex;
            flex: 1;
            flex-wrap: wrap;
            justify-content: center
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-pagination__pages {
                display: none
            }
        }

        .SprdMain .sprd-pagination__button {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-width: 1px;
            border-style: solid;
            border-radius: 50%;
            line-height: 40px;
            text-align: center;
            text-decoration: none
        }

        .SprdMain .sprd-pagination__button-icon {
            height: 26px;
            width: 26px
        }

        .SprdMain .sprd-pagination__left-button {
            align-content: flex-start;
            margin: 0 5px
        }

        .SprdMain .sprd-pagination__right-button {
            align-content: flex-end;
            margin: 0 5px
        }

        .SprdMain .sprd-pagination__page {
            margin: 0 5px
        }

        .SprdMain .sprd-pagination__page--dots {
            align-self: flex-end
        }

        .SprdMain .sprd-pagination__page--dots-icon {
            width: 16px
        }

        .SprdMain .sprd-pagination__page--current {
            font-weight: 700
        }

        .SprdMain .sprd-pagination__page-counter {
            display: none;
            line-height: 40px;
            text-align: center;
            vertical-align: middle;
            flex: 1
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-pagination__page-counter {
                display: inline
            }
        }

        @media screen and (max-width: 500px) {
            .SprdMain .sprd-pagination__page-counter {
                display: inline;
                width: 100%;
                order: -2;
                flex: auto;
                margin-bottom: .75em
            }
        }

        .SprdMain .sprd-detail-page {
            margin: 0 10px;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
            align-content: flex-start;
            min-height: 70vh;
            padding-bottom: 4em;
            font-size: .875em
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-detail-page {
                margin: 0 20px
            }
        }

        .SprdMain .sprd-detail-block {
            display: flex;
            width: 100%;
            flex-direction: row
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-block {
                flex-direction: column
            }
        }

        .SprdMain .sprd-detail-block__images {
            position: relative;
            width: 60%
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-block__images {
                width: 100%
            }
        }

        .SprdMain .sprd-detail-block__detail-info {
            width: 40%
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-block__detail-info {
                width: 100%
            }
        }

        .SprdMain .sprd-detail-block__spinner {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            transition: opacity .35s ease-in-out;
            transition-delay: .5s
        }

        .SprdMain .sprd-detail-info {
            display: flex;
            flex-direction: column;
            max-width: 32em;
            padding: 0 1em;
            box-sizing: border-box
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-info {
                max-width: none;
                padding: 0
            }
        }

        .SprdMain .sprd-detail-info__heading {
            word-wrap: break-word;
            margin-bottom: 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-info__heading {
                display: none
            }
        }

        .SprdMain .sprd-detail-info__subheading {
            display: flex;
            width: 100%;
            font-size: 1em;
            font-weight: 400;
            padding: 0 0 .857em;
            margin-top: 4px;
            border-bottom: 1px solid #999
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-info__subheading {
                display: none
            }
        }

        .SprdMain .sprd-detail-info__subheading-title {
            margin-right: 2em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-info__subheading-title {
                font-size: .875em
            }
        }

        .SprdMain .sprd-detail-info__subheading-reviews {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            height: 1em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-info__subheading-reviews {
                font-size: .875em
            }
        }

        .SprdMain .sprd-detail-info__rating-icon {
            height: 1.2em;
            width: 1.2em
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-info__rating-icon {
                height: 1em;
                width: 1em
            }
        }

        .SprdMain .sprd-detail-info__review-count {
            margin: 0
        }

        .SprdMain .sprd-detail-info__appearances {
            display: flex;
            margin: 1em 0 0;
            font-size: 1.5em;
            position: relative
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-info__appearances {
                margin-top: .75em
            }
        }

        .SprdMain .sprd-detail-info__text {
            margin: 1em 0 0;
            line-height: 1.5em
        }

        .SprdMain .sprd-detail-info__icon {
            width: 1em;
            height: 1em;
            vertical-align: middle
        }

        .SprdMain .sprd-detail-info__further-details {
            display: flex;
            margin: 1em 0 0
        }

        .SprdMain .sprd-detail-info__further-details button {
            margin-left: 1em
        }

        .SprdMain .sprd-detail-info__further-details button:first-child {
            margin-left: 0
        }

        .SprdMain .sprd-detail-info__further-details-btn {
            padding: 1em;
            line-height: 1em;
            font-size: 1em
        }

        .SprdMain .sprd-detail-info__stockout {
            margin: .5em 0 0;
            font-size: 1.25em;
            padding: 1em;
            bottom: 100%;
            position: relative
        }

        .SprdMain .sprd-detail-info__stockout:before {
            content: "";
            position: absolute;
            transform: rotate(45deg);
            width: 1em;
            height: 1em;
            top: -.5em;
            left: 1em;
            background-color: inherit
        }

        .SprdMain .sprd-detail-mobile-caption {
            display: none
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-mobile-caption {
                display: block
            }
        }

        .SprdMain .sprd-detail-mobile-caption__heading {
            margin-bottom: 0;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }

        .SprdMain .sprd-detail-mobile-caption__subheading {
            width: 100%;
            font-size: 1em;
            font-weight: 400;
            padding: 0 0 .857em;
            margin-top: 4px
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-mobile-caption__subheading {
                display: flex;
                margin-bottom: 0;
                justify-content: space-between;
                padding: 0 0 .429em
            }
        }

        .SprdMain .sprd-detail-images {
            display: flex;
            padding: 0 1em;
            box-sizing: border-box
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-images {
                padding: 0
            }
        }

        .SprdMain .sprd-detail-images__large-images {
            width: 100%;
            max-width: 700px;
            height: 100%;
            margin: 0 auto
        }

        .SprdMain .sprd-detail-images__large-images .sprd-slider__content {
            align-items: center
        }

        .SprdMain .sprd-detail-images__new-badge {
            position: absolute;
            top: 0;
            left: 0;
            padding: .5em .7em;
            font-weight: 700
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-images__new-badge {
                font-size: .857em
            }
        }

        .SprdMain .sprd-detail-images__large-image {
            position: relative;
            display: flex;
            width: 100%;
            overflow: hidden
        }

        .SprdMain .sprd-detail-images__large-image:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-detail-images__views {
            display: flex;
            margin-top: 1em;
            justify-content: center;
            align-items: center;
            flex: 1 0 100%
        }

        .SprdMain .sprd-detail-images__view {
            padding: 3px;
            font: inherit;
            text-align: inherit;
            background: none;
            border: 1px solid;
            cursor: pointer;
            outline: none;
            position: relative;
            display: flex;
            align-items: stretch;
            flex: 0 1 15%;
            max-width: 80px;
            margin: 0 6px 0 0;
            transition: border .3s ease-in-out;
            overflow: hidden
        }

        .SprdMain .sprd-detail-images__view:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-detail-images__view:hover {
            box-shadow: inset 0 0 0 1px
        }

        .SprdMain .sprd-detail-images__view--action {
            flex: none;
            max-width: 80px;
            padding: .25em
        }

        .SprdMain .sprd-detail-images__view--action:before {
            display: none
        }

        .SprdMain .sprd-detail-images__view--action-icon {
            width: 28px;
            height: 28px
        }

        .SprdMain .sprd-design-edit-tile {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 100%;
            height: 100%
        }

        .SprdMain .sprd-design-edit-tile__header {
            text-align: center;
            margin-top: 1em
        }

        .SprdMain .sprd-design-edit-tile__caption {
            margin-bottom: .5em;
            margin-top: 0;
            font-size: 1.125em
        }

        .SprdMain .sprd-design-edit-tile__subtitle {
            font-size: .875em
        }

        .SprdMain .sprd-design-edit-tile__view {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            text-align: center;
            flex-grow: 1
        }

        .SprdMain .sprd-design-edit-tile__view-content {
            position: relative;
            width: 50%;
            margin: 1em auto
        }

        .SprdMain .sprd-design-edit-tile__view-img {
            opacity: .25;
            width: 100%;
            height: 100%;
            object-fit: contain
        }

        .SprdMain .sprd-design-edit-tile__view-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 32px;
            height: 32px;
            cursor: pointer
        }

        .SprdMain .sprd-design-edit-tile__button {
            padding: .75em;
            line-height: 1em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-design-edit-tile__caption {
                font-size: 1.571em
            }

            .SprdMain .sprd-design-edit-tile__subtitle {
                font-size: 1em
            }

            .SprdMain .sprd-design-edit-tile__button {
                width: 60%;
                margin-bottom: 2em;
                padding: 1em
            }
        }

        .SprdMain .sprd-detail-price {
            font-size: 2em;
            font-weight: 700;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: .2em 0 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-price {
                font-size: 1.715em
            }
        }

        .SprdMain .sprd-detail-price__tax {
            font-size: .5em;
            font-weight: 400
        }

        .SprdMain .sprd-detail-price a {
            height: 100%
        }

        .SprdMain .sprd-detail-sizes {
            margin: 1em 0 0;
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
            position: relative
        }

        .SprdMain .sprd-detail-sizes--stockout {
            pointer-events: none;
            opacity: .25
        }

        .SprdMain .sprd-detail-sizes__size {
            margin: 0 .8em .8em 0;
            font-size: 1.15em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-detail-sizes__size {
                min-width: 4em
            }
        }

        .SprdMain .sprd-detail-sizes__size--stockout {
            pointer-events: none;
            opacity: .25
        }

        .SprdMain .sprd-detail-sizes__hint {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin-top: .25em
        }

        .SprdMain .sprd-detail-sizes__hint__ruler {
            width: 1.5em;
            height: 1.5em;
            margin-right: .5em
        }

        .SprdMain .sprd-detail-sizes__hint__size_table_btn {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            margin: 0 1em;
            overflow: visible
        }

        .SprdMain .sprd-detail-sizes__hint__size_reference_link, .SprdMain .sprd-detail-sizes__hint__size_table_btn {
            color: inherit;
            font-weight: 700;
            text-decoration: underline
        }

        .SprdMain .sprd-detail-sizes__cta {
            font-size: 1.143em;
            padding: .75em;
            position: absolute;
            bottom: calc(100% + 4px);
            left: 0
        }

        .SprdMain .sprd-detail-sizes__cta:before {
            content: "";
            position: absolute;
            transform: rotate(45deg);
            width: 1em;
            height: 1em;
            bottom: -.5em;
            left: 1em;
            background-color: inherit
        }

        .SprdMain .sprd-detail-cta {
            margin: 1.5em 0 0;
            display: flex;
            align-items: stretch
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-cta {
                margin-top: .5em
            }
        }

        .SprdMain .sprd-detail-cta--stockout {
            pointer-events: none;
            opacity: .25
        }

        .SprdMain .sprd-detail-cta__button {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 3.2em;
            font-size: 1.14em;
            transition: background-color .25s ease-in-out
        }

        .SprdMain .sprd-detail-cta__button__spinner {
            width: 1em;
            height: 1em;
            border-width: 4px
        }

        .SprdMain .sprd-detail-cta__icon {
            width: 1.25em;
            height: 1.25em;
            overflow: initial
        }

        .SprdMain .sprd-detail-cta__icon--cart {
            margin-right: .5em
        }

        .SprdMain .sprd-detail-suggestions {
            margin: 2em 0 0;
            width: 100%
        }

        .SprdMain .sprd-detail-suggestions__caption {
            font-size: 1.571em
        }

        .SprdMain .sprd-detail-suggestions__link {
            display: flex;
            align-items: center;
            flex-direction: column;
            color: inherit;
            text-decoration: none
        }

        .SprdMain .sprd-detail-suggestions__image {
            position: relative;
            width: 100%;
            max-width: 150px;
            max-height: 150px;
            overflow: hidden
        }

        .SprdMain .sprd-detail-suggestions__image:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-suggestions__image {
                max-height: 100px;
                max-width: 100px
            }
        }

        .SprdMain .sprd-detail-suggestions__name {
            text-align: center;
            padding: .5em;
            width: 150px;
            overflow: hidden;
            text-overflow: ellipsis
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-suggestions__name {
                width: 100px
            }
        }

        .SprdMain .sprd-detail-suggestions__price {
            display: flex;
            justify-content: center;
            width: 100%
        }

        .SprdMain .sprd-detail-suggestions__loading-spinner {
            margin: 5.75em auto
        }

        .SprdMain .sprd-detail-suggestions--loading {
            pointer-events: none
        }

        .SprdMain .sprd-detail-suggestions--loading .sprd-slider {
            opacity: .25
        }

        .SprdMain .sprd-detail-product-type {
            margin: 2em 0 0;
            line-height: 1.5em;
            width: 100%
        }

        .SprdMain .sprd-detail-product-type__heading {
            font-size: 1.571em;
            margin: 1em 0
        }

        .SprdMain .sprd-detail-product-type__sub-heading {
            font-size: 1.125em;
            margin: 0 0 .83em;
            font-weight: 700
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-product-type__sub-heading {
                font-weight: 400;
                font-size: 1.2em;
                margin: 0
            }
        }

        .SprdMain .sprd-detail-product-type__container {
            display: flex
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-product-type__container {
                flex-direction: column
            }
        }

        .SprdMain .sprd-detail-product-type__sub-container {
            display: none;
            padding-bottom: .5em
        }

        .SprdMain .sprd-detail-product-type__sub-container ul.listMCE li {
            margin: 0 0 .5em
        }

        .SprdMain .sprd-detail-product-type__sub-container ul.listMCE li:last-child {
            margin: 0
        }

        .SprdMain .sprd-detail-product-type__column {
            display: flex;
            flex-direction: column;
            flex: 1;
            font-size: 1.15em;
            border-bottom: 1px solid #999
        }

        .SprdMain .sprd-detail-product-type__column__toggle {
            padding: .8em 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            justify-content: space-between;
            width: 100%
        }

        .SprdMain .sprd-detail-product-type__column__toggle__icon {
            width: 1em;
            height: 1em
        }

        .SprdMain .sprd-detail-product-type__column__narrow p {
            margin: 0
        }

        .SprdMain .sprd-detail-product-type__column:first-child {
            border-top: 1px solid #999
        }

        .SprdMain .sprd-detail-product-type__column--expanded .sprd-detail-product-type__column__toggle {
            font-weight: 700
        }

        .SprdMain .sprd-detail-product-type__column--expanded .sprd-detail-product-type__column__toggle__icon {
            transform: rotate(180deg)
        }

        .SprdMain .sprd-detail-product-type__column--expanded .sprd-detail-product-type__sub-container {
            display: block
        }

        .SprdMain .sprd-detail-product-type__size-guide {
            display: flex;
            align-items: flex-start;
            flex-wrap: wrap;
            margin: 1em 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-product-type__size-guide {
                flex-direction: column
            }
        }

        .SprdMain .sprd-detail-product-type__size-image {
            max-width: 100%;
            width: 190px;
            height: 190px;
            position: relative
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-product-type__size-image {
                display: flex;
                align-self: center;
                margin-bottom: 1em;
                justify-content: center
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-detail-product-type__size-image {
                margin-right: 2em
            }
        }

        .SprdMain .sprd-detail-product-type__model-images {
            display: flex;
            flex-wrap: wrap;
            margin: 1em 0 0
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-product-type__model-images {
                justify-content: center
            }
        }

        .SprdMain .sprd-detail-product-type__model-image {
            width: 138px;
            height: 148px;
            overflow: hidden;
            margin: 0 .5em .5em 0;
            border: 1px solid
        }

        .SprdMain .sprd-detail-product-type__model-image img {
            margin-top: -1px;
            width: 560px;
            height: 150px
        }

        .SprdMain .sprd-detail-product-type__product-view-images {
            display: flex;
            flex-wrap: wrap;
            margin-left: -10px
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-product-type__product-view-images {
                display: none
            }
        }

        .SprdMain .sprd-detail-product-type__product-view-images--expanded {
            display: flex
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-product-type__product-view-images--expanded {
                margin-top: 1em
            }
        }

        .SprdMain .sprd-detail-product-type__product-view-image {
            position: relative;
            width: calc(50% - 10px);
            margin-left: 10px
        }

        .SprdMain .sprd-detail-product-type__product-view-image:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        @media screen and (min-width: 510px) {
            .SprdMain .sprd-detail-product-type__product-view-image {
                width: calc(33.3333% - 10px)
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-detail-product-type__product-view-image {
                width: calc(25% - 10px)
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-detail-product-type__product-view-image {
                width: calc(16.6667% - 10px)
            }
        }

        .SprdMain .sprd-detail-product-type__size-table {
            flex: 1;
            display: flex;
            flex-direction: column
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-detail-product-type__size-table {
                width: 100%;
                margin: 0
            }
        }

        .SprdMain .sprd-detail-product-type__size-table-head {
            display: flex;
            font-weight: 700;
            margin-bottom: .5em;
            padding: 0 .25em
        }

        .SprdMain .sprd-detail-product-type__size-table-head :not(:first-child) {
            text-align: center
        }

        .SprdMain .sprd-detail-product-type__size-table-body {
            display: flex;
            flex-direction: column
        }

        .SprdMain .sprd-detail-product-type__size-table-row {
            display: flex;
            margin-bottom: .5em;
            border-width: 2px;
            border-style: solid;
            padding: 0 .25em;
            cursor: pointer
        }

        .SprdMain .sprd-detail-product-type__size-table-row :not(:first-child) {
            text-align: center
        }

        .SprdMain .sprd-detail-product-type__size-table-row--stockout {
            pointer-events: none;
            opacity: .25
        }

        .SprdMain .sprd-detail-product-type__size-table-cell {
            flex: 1
        }

        .SprdMain .sprd-detail-product-type__size-table__btn {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-detail-product-type__column {
                border-bottom: 0
            }

            .SprdMain .sprd-detail-product-type__column:first-child {
                border-top: 0
            }

            .SprdMain .sprd-detail-product-type__column__narrow {
                width: 50%;
                margin-left: 2em
            }

            .SprdMain .sprd-detail-product-type__column__narrow:first-child {
                margin-left: 0
            }

            .SprdMain .sprd-detail-product-type__column__wide {
                width: 100%;
                margin-top: 1em
            }

            .SprdMain .sprd-detail-product-type__column__toggle {
                padding: 0
            }

            .SprdMain .sprd-detail-product-type__column__toggle__icon {
                display: none
            }

            .SprdMain .sprd-detail-product-type__sub-container {
                display: block
            }
        }

        .SprdMain .sprd-detail-columns {
            width: 100%
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-detail-columns {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-between
            }
        }

        .SprdMain .sprd-detail-column {
            margin-top: 2em
        }

        .SprdMain .sprd-detail-column:first-child {
            margin-top: 1em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-detail-column {
                flex: 0 0 calc(50% - 1em);
                margin-top: 1em
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-detail-column {
                flex: 0 0 calc(33% - 1em)
            }
        }

        .SprdMain .sprd-detail-column__caption {
            font-size: 1.571em
        }

        .SprdMain .sprd-detail-social {
            flex: 0 0 auto
        }

        .SprdMain .sprd-detail-social__bar {
            display: flex;
            flex-wrap: wrap
        }

        .SprdMain .sprd-detail-social__share-btn {
            border: none;
            padding: 0;
            width: auto;
            overflow: visible;
            background: transparent;
            cursor: pointer;
            margin: 0 2em 1em 0
        }

        .SprdMain .sprd-detail-social__share-btn:focus {
            outline: none
        }

        .SprdMain .sprd-detail-social__share-btn-icon {
            cursor: pointer;
            width: 35px;
            height: 35px
        }

        .SprdMain .sprd-detail-design-details__row {
            display: flex;
            flex-wrap: wrap
        }

        .SprdMain .sprd-detail-design-details__img {
            position: relative;
            width: 150px;
            height: 150px;
            margin-right: 2em
        }

        .SprdMain .sprd-detail-design-details__img:before {
            content: "";
            display: block;
            padding-top: 100%
        }

        .SprdMain .sprd-detail-design-details__text {
            flex: 1;
            line-height: 1.5em;
            max-width: 100%
        }

        .SprdMain .sprd-detail-design-details__text p {
            margin-top: 0
        }

        .SprdMain .sprd-detail-design__tag {
            margin: 0 .5em
        }

        .SprdMain .sprd-designer__design-view {
            display: flex;
            flex-direction: column;
            --fullHeight: 100vh;
            height: 100vh;
            height: var(--fullHeight);
            max-height: 1058px
        }

        .SprdMain .sprd-designer__design-view .sprd-basket-indicator {
            position: relative
        }

        .SprdMain .sprd-designer__header {
            display: flex;
            flex: 0 0 48px
        }

        .SprdMain .sprd-designer__header .sprd-header__title {
            font-size: 1em;
            line-height: 48px
        }

        .SprdMain .sprd-designer__back {
            display: flex
        }

        .SprdMain .sprd-designer__back .sprd-header__image, .SprdMain .sprd-designer__back .sprd-header__title {
            padding-left: 0;
            text-align: left;
            padding-bottom: 0
        }

        .SprdMain .sprd-designer__back .sprd-header__image:first-child, .SprdMain .sprd-designer__back .sprd-header__title:first-child {
            margin-left: 10px
        }

        .SprdMain .sprd-designer__back .sprd-header__image {
            max-height: 28px;
            justify-content: flex-start
        }

        .SprdMain .sprd-designer__back-link {
            display: flex;
            align-items: center;
            color: currentColor
        }

        .SprdMain .sprd-designer__back-link__icon {
            width: 2.5em;
            height: 2.5em;
            padding: .125em 0 0 .25em
        }

        .SprdMain .sprd-designer__title {
            margin: 0 auto;
            padding: 0 1.5em;
            flex: none
        }

        .SprdMain .sprd-designer__designer {
            flex: 1
        }

        .SprdMain .sprd-designer__info-view {
            padding: 20px 10px 4em
        }

        .SprdMain .sprd-designer__product-type-info-visible {
            position: absolute;
            top: 200px
        }

        .SprdMain .sprd-designer .sprd-detail-product-type__size-table-row {
            cursor: auto
        }

        @media screen and (max-width: 399px) {
            .SprdMain .sprd-designer__back .sprd-header__image, .SprdMain .sprd-designer__back .sprd-header__title {
                display: none
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-designer__header .sprd-header__title {
                font-size: 1.25em;
                line-height: 58px
            }

            .SprdMain .sprd-designer__back .sprd-header__image {
                max-height: 38px
            }

            .SprdMain .sprd-designer__header {
                flex-basis: 58px
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-designer__info-view {
                margin-right: 20px;
                margin-left: 20px
            }

            .SprdMain .sprd-designer__back .sprd-header__image:first-child, .SprdMain .sprd-designer__back .sprd-header__title:first-child {
                margin-left: 20px
            }
        }

        @supports (display:grid) {
            .SprdMain .sprd-designer__header {
                display: grid;
                grid-template-columns:minmax(0, 1fr) auto 1fr
            }

            .SprdMain .sprd-designer__header .sprd-basket-indicator {
                justify-content: flex-end
            }
        }

        .SprdMain .sprd-collections {
            font-size: .875em;
            margin: 0 10px
        }

        .SprdMain .sprd-collections__headline {
            margin-top: 0
        }

        .SprdMain .sprd-collections h2 {
            text-align: center
        }

        .SprdMain .sprd-collections__preview {
            margin-bottom: 4em
        }

        .SprdMain .sprd-collections__preview-desc {
            width: 90%;
            margin: 0 auto 1em;
            text-align: center;
            line-height: 1.5em
        }

        .SprdMain .sprd-collections__design-row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center
        }

        .SprdMain .sprd-collections__more {
            color: inherit;
            text-decoration: none;
            font-weight: 700;
            margin: .6em 1em
        }

        .SprdMain .sprd-collections__more-stuff-row {
            display: flex;
            justify-content: center
        }

        .SprdMain .sprd-collections__more-stuff-btn {
            transition: background-color .25s ease-in-out;
            text-decoration: none;
            line-height: 1.5em
        }

        .SprdMain .sprd-collections__further {
            margin-top: 5.5em;
            margin-bottom: 5.5em
        }

        .SprdMain .sprd-collections__further-links {
            display: flex;
            justify-content: center;
            margin-left: auto;
            margin-right: auto;
            flex-wrap: wrap;
            line-height: 1.75em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-collections__further-links {
                width: 70%
            }
        }

        .SprdMain .sprd-collections__further-links > div {
            padding-right: 1em
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-collections__preview-desc {
                width: 60%
            }
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-collections {
                margin-right: 20px;
                margin-left: 20px
            }
        }

        .SprdMain #impressumCustomer > :first-child {
            margin-top: 0
        }

        .SprdMain #impressumCustomer .sprd-email-image {
            display: inline-block;
            vertical-align: text-bottom;
            margin-left: .25em
        }

        .SprdMain .sprd-imprint {
            margin: 0 10px 40px;
            max-width: 48em
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-imprint {
                margin-right: 20px;
                margin-left: 20px
            }
        }

        .SprdMain .sprd-about {
            padding: 0 44px 3em;
            min-height: 400px
        }

        .SprdMain .sprd-about-info {
            max-width: 48em;
            margin: 0 auto
        }

        .SprdMain .sprd-about-info__caption {
            margin-top: 0
        }

        .SprdMain .sprd-about-info__caption, .SprdMain .sprd-about-info__sub-caption {
            text-align: center
        }

        .SprdMain .sprd-about-info__text {
            line-height: 1.6
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-about-info__text {
                font-size: .875em;
                line-height: 1.35
            }
        }

        .SprdMain .sprd-about-info__media {
            display: flex;
            margin: 3em 0;
            align-items: center;
            justify-content: center
        }

        @media screen and (max-width: 767px) {
            .SprdMain .sprd-about-info__media {
                flex-flow: column
            }
        }

        .SprdMain .sprd-about-info__media .sprd-media__video {
            width: 100%;
            margin-right: 0
        }

        .SprdMain .sprd-about-info__backbtn {
            margin-top: 1.5em;
            text-align: center
        }

        .sprd-message-inactive {
            background-color: #f2f2f2;
            box-sizing: border-box;
            display: flex;
            width: 100vw;
            height: 100vh;
            max-width: 1400px;
            margin: 0 auto;
            justify-content: center;
            align-items: center
        }

        .sprd-message-inactive * {
            box-sizing: border-box
        }

        .sprd-message-inactive__modal {
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 2.5em
        }

        .sprd-message-inactive__description, .sprd-message-inactive__headline {
            margin: 0 0 1em
        }

        .sprd-message-inactive__button-shopping {
            text-decoration: none;
            color: #fff;
            background-color: #00b2a5;
            border-radius: .2em;
            padding: .65em 2.5em;
            margin: 0 0 2em
        }

        .sprd-message-inactive__button-shopping:hover {
            text-decoration: underline
        }

        .sprd-message-inactive__button-open-shop {
            text-decoration: none;
            color: #00b2a5
        }

        .sprd-message-inactive__button-open-shop:hover {
            text-decoration: underline
        }

        .sprd-activation-banner {
            display: flex;
            align-items: center;
            background-color: #ff9343;
            color: #fff;
            justify-content: center
        }

        .sprd-activation-banner__container {
            max-width: 1400px;
            width: 100%;
            display: flex;
            align-items: center;
            padding: 0 2em;
            box-sizing: border-box
        }

        .sprd-activation-banner__text {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center
        }

        .sprd-activation-banner__headline {
            margin-bottom: 0
        }

        .sprd-activation-banner__description {
            margin-top: 0
        }

        .sprd-activation-banner__button {
            border: 1px solid #fff;
            padding: .5em 1em;
            display: flex;
            align-items: center;
            border-radius: .2em;
            text-decoration: none;
            color: inherit;
            font-weight: 700
        }

        .sprd-activation-banner__icon {
            fill: #fff;
            width: 1.6em;
            height: 1.6em;
            margin-right: .4em
        }

        .sprd-language-overlay__button {
            display: flex !important;
            align-items: center;
            justify-content: center
        }

        .sprd-language-overlay__flag {
            width: 3em;
            height: 2em;
            margin-right: 1em
        }

        .sprd-language-switch {
            position: relative
        }

        .sprd-language-switch__toggle {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            line-height: inherit
        }

        .sprd-language-switch__icon {
            margin-right: .4em;
            width: 1.43em;
            height: 1.43em
        }

        .sprd-language-switch__caret {
            width: 1em;
            height: 1em;
            margin-left: .29em
        }

        .sprd-language-switch--open .sprd-language-switch__caret {
            transform: rotate(180deg)
        }

        .sprd-language-switch__dropup {
            display: none;
            z-index: 5;
            padding: 2.29em;
            position: absolute;
            left: 0;
            bottom: 100%;
            font-size: .875em;
            border-width: 1px;
            border-style: solid;
            box-shadow: 3px 3px 7px rgba(0, 0, 0, .2);
            outline: none
        }

        @media screen and (max-width: 999px) {
            .sprd-language-switch__dropup {
                border: 0;
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                padding: 10px 20px;
                overflow: scroll
            }
        }

        .sprd-language-switch__dropup h2 {
            padding: 0 .76em
        }

        .sprd-language-switch__close {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            width: 4em;
            height: 4em;
            position: absolute;
            top: 0;
            right: 0
        }

        .sprd-language-switch__close-icon {
            width: 1.4286em;
            height: 1.4286em
        }

        .sprd-language-switch--open .sprd-language-switch__dropup {
            display: block
        }

        .sprd-language-switch__languages {
            display: flex
        }

        @media screen and (max-width: 600px) {
            .sprd-language-switch__languages {
                flex-direction: column
            }
        }

        .sprd-language-switch__row {
            display: flex
        }

        @media screen and (max-width: 600px) {
            .sprd-language-switch__row {
                flex-direction: column
            }
        }

        .sprd-language-switch__column {
            display: flex;
            flex-direction: column;
            padding: 0 1.14em
        }

        @media screen and (max-width: 600px) {
            .sprd-language-switch__column {
                padding: 0
            }
        }

        .sprd-language-switch__column:first-child {
            padding-left: 0
        }

        .sprd-language-switch__group {
            display: flex;
            flex-direction: column;
            padding: 0 1.14em
        }

        .sprd-language-switch__group--na {
            order: -1
        }

        .sprd-language-switch__caption {
            margin: 1em 0;
            font-size: 1.143em
        }

        .sprd-language-switch__link {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: .75em 0;
            white-space: nowrap;
            color: inherit;
            text-decoration: none
        }

        .sprd-language-switch__link:hover {
            text-decoration: underline
        }

        @media screen and (max-width: 999px) {
            .sprd-language-switch__link {
                padding: .4em 0
            }
        }

        .sprd-language-switch .sprd-country__icon {
            height: 1em;
            width: 1.5em;
            margin-right: .57em
        }

        .sprd-info-footer__link {
            display: block;
            color: inherit;
            font-size: .875em;
            text-decoration: none
        }

        .sprd-info-footer__link:hover {
            text-decoration: underline
        }

        .sprd-info-footer__contact-col {
            flex-direction: column;
            align-items: center
        }

        .sprd-info-footer__open-shop {
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2em;
            color: inherit;
            font-weight: 700;
            text-decoration: none
        }

        .sprd-info-footer__open-shop:hover {
            text-decoration: underline
        }

        .sprd-info-footer__open-shop-icon {
            width: 1.5em;
            height: 1.5em;
            margin-right: .5em
        }

        .sprd-info-footer__times {
            display: block;
            font-size: .875em
        }

        @media screen and (min-width: 768px) {
            .sprd-info-footer {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                padding-right: 0;
                padding-left: 0
            }

            .sprd-info-footer__link {
                font-size: 1em
            }
        }

        .sprd-service-footer {
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: center;
            padding: .5em
        }

        .sprd-footer-box {
            flex: 1 1 auto;
            padding: .5em
        }

        .sprd-footer-box__icons {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            width: 100%
        }

        .sprd-footer-box__link {
            padding: 0 .5em;
            text-align: center
        }

        .sprd-footer-box__icon {
            margin: .5em
        }

        .sprd-footer-box__icon--shipping {
            height: 2em;
            max-width: 5em
        }

        .sprd-footer-box__icon--payment {
            height: 1.375em;
            max-width: 3.5em
        }

        .sprd-footer-box--reviews {
            display: flex;
            justify-content: center
        }

        .sprd-tracking-menu {
            flex: 1 1 50%;
            position: relative
        }

        .sprd-tracking-menu__toggle {
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            display: flex;
            align-items: center;
            font-family: inherit
        }

        .sprd-tracking-menu__caret {
            width: 1em;
            height: 1em;
            margin-left: .29em
        }

        .sprd-tracking-menu--open .sprd-tracking-menu__caret {
            transform: rotate(180deg)
        }

        .sprd-tracking-menu__dropup {
            z-index: 5;
            min-width: 25em;
            bottom: 100%;
            left: 0;
            position: absolute;
            display: none;
            cursor: default;
            border-width: 1px;
            border-style: solid;
            box-shadow: 3px 3px 7px rgba(0, 0, 0, .2);
            padding: 2em;
            outline: none
        }

        @media screen and (max-width: 740px) {
            .sprd-tracking-menu__dropup {
                border: 0;
                position: fixed;
                min-width: 0;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                padding: .5em 2em;
                overflow: scroll
            }
        }

        .sprd-tracking-menu__close {
            padding: 0;
            font: inherit;
            text-align: inherit;
            color: inherit;
            background: none;
            border: 0;
            cursor: pointer;
            outline: none;
            position: absolute;
            top: 1.25em;
            right: 1.25em
        }

        .sprd-tracking-menu__close-icon {
            width: 1.25em;
            height: 1.25em
        }

        .sprd-tracking-menu--open .sprd-tracking-menu__dropup {
            display: flex;
            flex-direction: column
        }

        .sprd-tracking-menu__text {
            margin-bottom: 2em;
            line-height: 1.5em
        }

        .sprd-tracking-menu__cta {
            display: flex !important;
            justify-content: center;
            align-items: center
        }

        .sprd-tracking-menu__cta svg {
            width: 1em;
            height: 1em;
            margin-right: .5em
        }

        @media screen and (min-width: 768px) {
            .sprd-tracking-menu__toggle {
                font-size: 1em
            }
        }

        .sprd-custom-footer {
            overflow: hidden;
            text-align: center;
            max-width: 100%
        }

        .sprd-custom-footer img {
            max-width: 100%
        }

        .sprd-footer {
            width: 100%;
            max-width: 1400px;
            margin: 0 auto;
            position: relative;
            box-sizing: border-box
        }

        .sprd-footer * {
            box-sizing: inherit
        }

        .sprd-overlay-visible {
            overflow: hidden !important;
            height: 100%;
            width: 100%;
            position: fixed
        }

        .sprd-tracking {
            display: block;
            height: 0;
            width: 0;
            visibility: hidden;
            border: none
        }</style>
    <style id="sprd-custom-css">@font-face {
            font-family: Raleway;
            font-style: normal;
            font-display: swap;
            font-weight: 700;
            src: local("Raleway Bold"), local("Raleway-Bold"), url(https://rehman2.myspreadshop.com/shopfiles/fonts/raleway/raleway-700.woff2) format("woff2"), url(https://rehman2.myspreadshop.com/shopfiles/fonts/raleway/raleway-700.woff) format("woff")
        }

        #sprd-main .sprd__caption, #sprd-main .sprd__headline {
            font-family: Raleway, Helvetica, Arial, sans-serif
        }

        @font-face {
            font-family: Inconsolata;
            font-style: normal;
            font-display: swap;
            font-weight: 400;
            src: local("Inconsolata Regular"), local("Inconsolata-Regular"), url(https://rehman2.myspreadshop.com/shopfiles/fonts/inconsolata/inconsolata-regular.woff2) format("woff2"), url(https://rehman2.myspreadshop.com/shopfiles/fonts/inconsolata/inconsolata-regular.woff) format("woff")
        }

        @font-face {
            font-family: Inconsolata;
            font-style: normal;
            font-display: swap;
            font-weight: 700;
            src: local("Inconsolata Bold"), local("Inconsolata-Bold"), url(https://rehman2.myspreadshop.com/shopfiles/fonts/inconsolata/inconsolata-700.woff2) format("woff2"), url(https://rehman2.myspreadshop.com/shopfiles/fonts/inconsolata/inconsolata-700.woff) format("woff")
        }

        #sprd-main {
            font-family: Inconsolata, SFMono-Regular, Consolas, Liberation Mono, Menlo, Courier, monospace
        }

        @supports (--css:variables) {
            .SprdMain .sprd-startpage-about-us .sprd-media__image + .sprd-startpage-about-us__textsection, .SprdMain .sprd-startpage-preview-tiles__text, .SprdMain .sprd-startpage-product-type-categories__sub-caption, .SprdMain .sprd-startpage-teaser__content {
                background: none;
                z-index: 0
            }

            .SprdMain .sprd-startpage-about-us .sprd-media__image + .sprd-startpage-about-us__textsection:before, .SprdMain .sprd-startpage-preview-tiles__text:before, .SprdMain .sprd-startpage-product-type-categories__sub-caption:before, .SprdMain .sprd-startpage-teaser__content:before {
                content: "";
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: -1;
                background: var(--sprd-main3);
                opacity: .75
            }
        }

        .SprdMain .sprd-navigation {
            position: relative
        }

        .SprdMain .sprd-department-filter__departments {
            display: none;
            flex-wrap: wrap;
            position: absolute;
            top: 100%;
            right: 0;
            left: 0;
            z-index: 1;
            box-shadow: 0 8px 8px -8px rgba(0, 0, 0, .15)
        }

        .SprdMain .sprd-department-filter__departments .sprd-department-filter__openmenu {
            flex-direction: column;
            margin-left: 2em
        }

        .SprdMain .sprd-department-filter__departments .sprd-department-filter__openmenu:first-child {
            margin-left: 10px
        }

        .SprdMain .sprd-department-filter__departments .sprd-department-filter__openmenu:last-child {
            margin-right: 20px
        }

        .SprdMain .sprd-department-filter__openmenu:hover .sprd-department-filter__departments {
            display: flex
        }

        .SprdMain .sprd-department-filter__openmenu:focus-within .sprd-department-filter__departments {
            display: flex
        }

        .SprdMain .sprd-department-filter__entry {
            display: block;
            padding-right: .6em;
            padding-left: .6em
        }

        .SprdMain .sprd-department-filter {
            justify-content: center
        }

        .SprdMain .sprd-department-filter__departments {
            justify-content: center;
            padding: 1.5em 0
        }

        .SprdMain .sprd-department-filter__departments .sprd-department-filter__openmenu:first-child {
            margin-left: 0
        }

        .SprdMain .sprd-department-filter__departments .sprd-department-filter__openmenu:last-child {
            margin-right: 0
        }

        .SprdMain .sprd-department-filter__departments .sprd-nav-link__caret {
            display: none
        }

        .SprdMain .sprd-department-filter__menu:before {
            content: "";
            display: block;
            margin-bottom: .5em
        }

        .SprdMain .sprd-department-filter__departments .sprd-nav-link, .SprdMain .sprd-department-filter__entry {
            line-height: 1.8
        }

        .SprdMain .sprd-nav-link + .sprd-department-filter__menu:before {
            border-top: 1px solid;
            opacity: .25
        }

        .SprdMain .sprd-basket-indicator__button, .SprdMain .sprd-search__button {
            padding-bottom: 6px
        }

        .SprdMain .sprd-basket-indicator__button--open, .SprdMain .sprd-basket-indicator__button:focus, .SprdMain .sprd-search__button--open, .SprdMain .sprd-search__button:focus {
            padding: 0 0 3px
        }

        .SprdMain #collections-filter .sprd-department-filter__menu {
            display: flex;
            flex-wrap: wrap
        }

        @media screen and (min-width: 1000px) {
            .SprdMain .sprd-header {
                flex-wrap: wrap;
                justify-content: flex-end;
                padding-top: 1em
            }

            .SprdMain .sprd-header__image, .SprdMain .sprd-header__title {
                flex: 0 0 100%;
                text-align: center
            }

            .SprdMain .sprd-header__image:not(.sprd-designer__title), .SprdMain .sprd-header__title:not(.sprd-designer__title) {
                order: 2;
                padding-left: 0
            }

            .SprdMain .sprd-header__title {
                font-size: 3.5em
            }

            .SprdMain .sprd-header__title:not(.sprd-designer__title) {
                padding-bottom: .5em
            }

            .SprdMain .sprd-header__image > img {
                margin: 0 auto
            }
        }

        .SprdMain .sprd-info-footer {
            padding: 1em 0 2em;
            border-top-width: 1px;
            border-top-style: solid
        }

        .SprdMain .sprd-info-footer__col {
            display: flex;
            flex-wrap: wrap
        }

        .SprdMain .sprd-info-footer__link {
            flex: 1 0 50%;
            padding: .5em 1em
        }

        .SprdMain .sprd-info-footer__times {
            text-align: center
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-info-footer__col {
                display: block;
                flex: 0 1 auto
            }
        }

        .SprdMain .sprd-startpage-about-us {
            position: relative;
            padding-top: 0;
            overflow: hidden
        }

        .SprdMain .sprd-startpage-about-us .sprd-media__image {
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            margin-right: 0;
            margin-bottom: 0
        }

        .SprdMain .sprd-startpage-about-us .sprd-media__image + .sprd-startpage-about-us__textsection {
            position: relative;
            margin: 12em 0 3em;
            padding: 2em 2.125em 1.5em;
            color: var(--sprd-sub2)
        }

        .SprdMain .sprd-startpage-about-us .sprd-img-spinner {
            height: 100%
        }

        .SprdMain .sprd-startpage-about-us .sprd-img-spinner__image {
            width: 100%;
            height: 100%;
            max-height: none;
            object-fit: cover
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-about-us {
                justify-content: center;
                min-height: 400px
            }

            .SprdMain .sprd-startpage-about-us .sprd-media__image + .sprd-startpage-about-us__textsection {
                max-width: 60%;
                margin: 0
            }
        }

        .SprdMain .sprd-startpage-preview-tiles__previews {
            justify-content: center;
            margin: 0 -1em
        }

        .SprdMain .sprd-startpage-preview-tiles__preview {
            position: relative;
            width: 100%;
            max-width: calc(500px + 2.5em);
            margin-bottom: 2em;
            padding: 0 1em
        }

        .SprdMain .sprd-startpage-preview-tiles__preview:nth-child(n+5) {
            display: none
        }

        .SprdMain .sprd-startpage-preview-tiles__text {
            position: absolute;
            right: 2em;
            bottom: 1em;
            padding: .5em 1em;
            text-align: left;
            max-width: calc(100% - 9.5em)
        }

        .SprdMain .sprd-startpage-preview-tiles__name {
            margin-bottom: .25em
        }

        @media screen and (min-width: 350px) {
            .SprdMain .sprd-startpage-preview-tiles__preview {
                width: 50%
            }
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-preview-tiles__previews {
                margin-right: -1.25em;
                margin-left: -1.25em
            }

            .SprdMain .sprd-startpage-preview-tiles__preview {
                margin-bottom: 2.5em;
                padding: 0 1.25em
            }

            .SprdMain .sprd-startpage-preview-tiles__text {
                right: 3.25em;
                bottom: 2em;
                padding: 1em 1.5em
            }

            .SprdMain .sprd-startpage-preview-tiles__name {
                font-size: 1.5em
            }
        }

        .SprdMain .sprd-startpage-product-type-categories__category {
            position: relative
        }

        .SprdMain .sprd-startpage-product-type-categories__sub-caption {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            padding: .5em 1em;
            text-transform: uppercase;
            z-index: 1
        }

        .SprdMain .sprd-startpage-product-type-categories__department:empty, .SprdMain .sprd-startpage-product-type-categories__name:empty {
            display: none
        }

        .SprdMain .sprd-startpage-teaser__plain-image {
            max-height: 500px
        }

        .SprdMain .sprd-startpage-teaser__content {
            align-items: flex-start;
            min-height: 0;
            margin: 12em 0 3em;
            padding-top: 2em;
            padding-bottom: 1.5em
        }

        .SprdMain .sprd-startpage-teaser .sprd__caption, .SprdMain .sprd-startpage-teaser__subcaption {
            text-align: left
        }

        .SprdMain .sprd-startpage-teaser__subcaption {
            font-weight: 400
        }

        @media screen and (min-width: 768px) {
            .SprdMain .sprd-startpage-teaser--with-search, .SprdMain .sprd-startpage-teaser--with-text, .SprdMain .sprd-startpage-teaser__link {
                min-height: 500px;
                display: flex;
                align-items: flex-end
            }

            .SprdMain .sprd-startpage-teaser__content {
                margin: 2em 2em 2em 50%;
                padding: 3em 2em
            }
        }

        :root {
            --sprd-main1: #fff;
            --sprd-main2: #29A339;
            --sprd-main3: #fff;
            --sprd-sub2: #22262D;
            --sprd-sub3: #333
        }

        .customPageBackground {
            background-color: #fff;
            color: #22262D
        }

        .SprdMain .sprd-overlay .sprd-Wrapper {
            background-color: #fff;
            color: #22262D
        }

        .sprd-department-filter__entry:hover, .sprd-department-filter__entry:focus {
            background-color: #29A339;
            color: #22262D
        }

        .sprd-button {
            background-color: #fff;
            color: #FEFEFE
        }

        .sprd-button.sprd-default {
            font-weight: 600;
            background-color: #fff;
            color: #22262D
        }

        .sprd-button.sprd-primary {
            background-color: #29A339;
            color: #22262D;
            border: 1px solid #248f32
        }

        .sprd-button.sprd-secondary {
            background-color: #22262D;
            color: #fff;
            border: 1px solid #22262D
        }

        .sprd-bg-m1 {
            background-color: #fff
        }

        .sprd-c-m1 {
            color: #fff
        }

        .sprd-hc-m1:hover {
            color: #fff
        }

        .sprd-bc-m1 {
            border-color: #fff
        }

        .sprd-lc-m1 {
            color: #ccc
        }

        .sprd-lbc-m1 {
            border-color: #ccc
        }

        .sprd-bg-m2 {
            background-color: #29A339
        }

        .sprd-c-m2 {
            color: #29A339
        }

        .sprd-hc-m2:hover {
            color: #29A339
        }

        .sprd-bc-m2 {
            border-color: #29A339
        }

        .sprd-lc-m2 {
            color: #94d19c
        }

        .sprd-lbc-m2 {
            border-color: #94d19c
        }

        .sprd-bg-m3 {
            background-color: #fff
        }

        .sprd-c-m3 {
            color: #fff
        }

        .sprd-hc-m3:hover {
            color: #fff
        }

        .sprd-bc-m3 {
            border-color: #fff
        }

        .sprd-lc-m3 {
            color: #ccc
        }

        .sprd-lbc-m3 {
            border-color: #ccc
        }

        .sprd-bg-s2 {
            background-color: #22262D
        }

        .sprd-c-s2 {
            color: #22262D
        }

        .sprd-hc-s2:hover {
            color: #22262D
        }

        .sprd-bc-s2 {
            border-color: #22262D
        }

        .sprd-lc-s2 {
            color: #919396
        }

        .sprd-lbc-s2 {
            border-color: #919396
        }

        .sprd-bg-s3 {
            background-color: #333
        }

        .sprd-c-s3 {
            color: #333
        }

        .sprd-hc-s3:hover {
            color: #333
        }

        .sprd-bc-s3 {
            border-color: #333
        }

        .sprd-lc-s3 {
            color: #999
        }

        .sprd-lbc-s3 {
            border-color: #999
        }

        .sprd-f-s2 {
            fill: #22262D
        }

        .sprd-lbg-s2 {
            background-color: #c8c9cb
        }

        .sprd-c-cta {
            color: #22262D
        }

        .sprd-btn-primary {
            background-color: #29A339;
            border: 1px solid #29A339;
            color: #22262D
        }

        .sprd-btn-primary:hover {
            background-color: #54b561;
            border-color: #54b561
        }

        .sprd-btn-secondary {
            background-color: #fff;
            border: 1px solid #22262D;
            color: #22262D
        }

        .sprd-btn-secondary:hover {
            border: 1px solid #29A339;
            color: #29A339
        }

        .SprdMain .sprd-product-list-item--hover {
            border-color: #22262D
        }

        @media screen and (max-width: 767px) {
            .sprd-blurry-slider::after {
                background-image: linear-gradient(to left, #fff, rgba(255, 255, 255, 0))
            }
        }
    </style>

    <style>
        .active{
            border-bottom:3px solid green;
        }
    </style>

</head>
