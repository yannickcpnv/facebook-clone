<!DOCTYPE html>
<html lang="fr" id="facebook" class="no_js">
<head>
    <meta charset="utf-8"/>
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer"/>
    <script nonce="Bnsmr6JE">window._cstart = +new Date()</script>
    <script nonce="Bnsmr6JE">function envFlush (a)
      {
        function b (b) {for (var c in a) b[c] = a[c]}
        window.requireLazy ? window.requireLazy(['Env'], b) : (window.Env = window.Env || {}, b(window.Env))
      }
      envFlush({
        'ajaxpipe_token': 'AXjLPZYSnnmD94JgsDM',
        'timeslice_heartbeat_config': {
          'pollIntervalMs': 33,
          'idleGapThresholdMs': 60,
          'ignoredTimesliceNames': {
            'requestAnimationFrame': true,
            'Event listenHandler mousemove': true,
            'Event listenHandler mouseover': true,
            'Event listenHandler mouseout': true,
            'Event listenHandler scroll': true,
          },
          'isHeartbeatEnabled': true,
          'isArtilleryOn': false,
        },
        'shouldLogCounters': true,
        'timeslice_categories': { 'react_render': true, 'reflow': true },
        'sample_continuation_stacktraces': true,
        'dom_mutation_flag': true,
        'gk_requirelazy_mem': true,
        'stack_trace_limit': 30,
        'timesliceBufferSize': 5000,
        'show_invariant_decoder': false,
        'compat_iframe_token': 'AQ44BdRSfKM-NM91uYo',
        'isCQuick': false,
      })</script>
    <style nonce="Bnsmr6JE"></style>
    <script nonce="Bnsmr6JE">__DEV__ = 0
      CavalryLogger = window.CavalryLogger || function (a) {this.lid = a, this.transition = !1, this.metric_collected = !1, this.is_detailed_profiler = !1, this.instrumentation_started = !1, this.pagelet_metrics = {}, this.events = {}, this.ongoing_watch = {}, this.values = { t_cstart: window._cstart }, this.piggy_values = {}, this.bootloader_metrics = {}, this.resource_to_pagelet_mapping = {}, this.initializeInstrumentation && this.initializeInstrumentation()}, CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
        this.is_detailed_profiler = a
        return this
      }, CavalryLogger.prototype.setTTIEvent = function (a) {
        this.tti_event = a
        return this
      }, CavalryLogger.prototype.setValue = function (a, b, c, d) {
        d = d ? this.piggy_values : this.values;
        (typeof d[a] === 'undefined' || c) && (d[a] = b)
        return this
      }, CavalryLogger.prototype.getLastTtiValue = function () {return this.lastTtiValue}, CavalryLogger.prototype.setTimeStamp = CavalryLogger.prototype.setTimeStamp || function (a, b, c, d) {
        this.mark(a)
        var e = this.values.t_cstart || this.values.t_start
        e = d ? e + d : CavalryLogger.now()
        this.setValue(a, e, b, c)
        this.tti_event && a == this.tti_event && (this.lastTtiValue = e, this.setTimeStamp('t_tti', b))
        return this
      }, CavalryLogger.prototype.mark = typeof console === 'object' && console.timeStamp ? function (a) {console.timeStamp(a)} : function () {}, CavalryLogger.prototype.addPiggyback = function (a, b) {
        this.piggy_values[a] = b
        return this
      }, CavalryLogger.instances = {}, CavalryLogger.id = 0, CavalryLogger.getInstance = function (a) {
        typeof a === 'undefined' && (a = CavalryLogger.id)
        CavalryLogger.instances[a] || (CavalryLogger.instances[a] = new CavalryLogger(a))
        return CavalryLogger.instances[a]
      }, CavalryLogger.setPageID = function (a) {
        if (CavalryLogger.id === 0) {
          var b = CavalryLogger.getInstance()
          CavalryLogger.instances[a] = b
          CavalryLogger.instances[a].lid = a
          delete CavalryLogger.instances[0]
        }
        CavalryLogger.id = a
      }, CavalryLogger.now = function () {return window.performance && performance.timing && performance.timing.navigationStart && performance.now ? performance.now() + performance.timing.navigationStart : new Date().getTime()}, CavalryLogger.prototype.measureResources = function () {}, CavalryLogger.prototype.profileEarlyResources = function () {}, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {}, CavalryLogger.start_js = function () {}, CavalryLogger.done_js = function () {}
      CavalryLogger.getInstance().setTTIEvent('t_domcontent')
      CavalryLogger.prototype.measureResources = function (a, b) {
        if (!this.log_resources) return
        var c = 'bootload/' + a.name
        if (this.bootloader_metrics[c] !== void 0 || this.ongoing_watch[c] !== void 0) return
        var d = CavalryLogger.now()
        this.ongoing_watch[c] = d
        'start_' + c in this.bootloader_metrics || (this.bootloader_metrics['start_' + c] = d)
        b && !('tag_' + c in this.bootloader_metrics) && (this.bootloader_metrics['tag_' + c] = b)
        if (a.type === 'js') {
          c = 'js_exec/' + a.name
          this.ongoing_watch[c] = d
        }
      }, CavalryLogger.prototype.stopWatch = function (a) {
        if (this.ongoing_watch[a]) {
          var b = CavalryLogger.now(), c = b - this.ongoing_watch[a]
          this.bootloader_metrics[a] = c
          var d = this.piggy_values
          a.indexOf('bootload') === 0 && (d.t_resource_download || (d.t_resource_download = 0), d.resources_downloaded || (d.resources_downloaded = 0), d.t_resource_download += c, d.resources_downloaded += 1, d['tag_' + a] == '_EF_' && (d.t_pagelet_cssload_early_resources = b))
          delete this.ongoing_watch[a]
        }
        return this
      }, CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
        var a = {}
        Object.values(window.CavalryLogger.instances).forEach(function (b) {b.bootloader_metrics && Object.assign(a, b.bootloader_metrics)})
        return a
      }, CavalryLogger.start_js = function (a) {for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch('js_exec/' + a[b])}, CavalryLogger.done_js = function (a) {for (var b = 0; b < a.length; ++b) CavalryLogger.getInstance().stopWatch('bootload/' + a[b])}, CavalryLogger.prototype.profileEarlyResources = function (a) {
        for (var b = 0; b < a.length; b++) this.measureResources({
          name: a[b][0],
          type: a[b][1] ? 'js' : '',
        }, '_EF_')
      }
      CavalryLogger.getInstance().log_resources = true
      CavalryLogger.getInstance().setIsDetailedProfiler(true)
      window.CavalryLogger && CavalryLogger.getInstance().setTimeStamp('t_start')</script>
    <noscript>
        <meta http-equiv="refresh" content="0; URL=/?_fb_noscript=1"/>
    </noscript>
    <link rel="manifest" href="/data/manifest/" crossorigin="use-credentials"/>
    <title id="pageTitle">Facebook - Connexion ou inscription</title>
    <meta property="og:site_name" content="Facebook"/>
    <meta property="og:url" content="https://fr-fr.facebook.com/"/>
    <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png"/>
    <meta property="og:locale" content="fr_FR"/>
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.facebook.com/"/>
    <link rel="alternate" media="handheld" href="https://m.facebook.com/"/>
    <meta name="description"
          content="Connectez-vous &#xe0; Facebook pour commencer &#xe0; partager et communiquer avec vos amis, votre famille et les personnes que vous connaissez."/>
    <link rel="canonical" href="https://fr-fr.facebook.com/"/>
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/l/0,cross/dl3DlJiBeI_.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="3OVhK5M" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/l/0,cross/NoOICvUTSrn.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="+0yl4XE" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/l/0,cross/1hIljvzMwV2.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="Z45zEmb" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/l/0,cross/d09TEKYkymm.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="jmUWq5N" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/l/0,cross/3vd1fhGzZ3o.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="iKnZGfK" crossorigin="anonymous"/>
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yW/r/PNI3iyeOA3w.js?_nc_x=Ij3Wp8lg5Kz"
            data-bootloader-hash="xHRqywp" crossorigin="anonymous" nonce="Bnsmr6JE"></script>
    <script nonce="Bnsmr6JE">requireLazy(['HasteSupportData'], function (m) {
        m.handle({
          'clpData': {
            '1814852': { 'r': 1 },
            '1949898': { 'r': 1 },
            '1848815': { 'r': 10000, 's': 1 },
            '1744178': { 'r': 1, 's': 1 },
          },
          'gkxData': {
            '708253': { 'result': false, 'hash': 'AT5n4hBL3YTMnQWtK3c' },
            '996940': { 'result': false, 'hash': 'AT7opYuEGy3sjG1aeFw' },
            '1224637': { 'result': false, 'hash': 'AT7JRluWxuwDm3XzOeo' },
            '1263340': { 'result': false, 'hash': 'AT5bwizWgDaFQudmXts' },
            '676837': { 'result': false, 'hash': 'AT4N8wBZA8ctCdHw2m8' },
            '676920': { 'result': true, 'hash': 'AT497IX4gOFG8gZeLQQ' },
            '1073500': { 'result': true, 'hash': 'AT7aJmfnqWyioxOOLtI' },
            '1857581': { 'result': false, 'hash': 'AT5yTxGMp6le0PAtEsU' },
            '3752': { 'result': false, 'hash': 'AT6eS5UTkkMp_xbPOro' },
            '3831': { 'result': false, 'hash': 'AT4W23lQ0XxAZniM9Wk' },
            '4075': { 'result': false, 'hash': 'AT4_ZQi0sTjSt-RxRfQ' },
            '676838': { 'result': false, 'hash': 'AT6nN1ehT9yq-2q64F8' },
            '1217157': { 'result': false, 'hash': 'AT6B7YmllOsArnK6VU0' },
            '1554827': { 'result': false, 'hash': 'AT7zueGLhGo0cT5xsb4' },
            '1738486': { 'result': false, 'hash': 'AT4cX37oQco6DwhUKGA' },
          },
          'qplData': { '7758': { 'r': 1 } },
        })
      })
      requireLazy(['TimeSliceImpl', 'ServerJS'], function (TimeSlice, ServerJS) {
        (new ServerJS()).handle({
          'define': [['URLFragmentPreludeConfig', [], {
            'hashtagRedirect': true,
            'fragBlacklist': ['nonce', 'access_token', 'oauth_token', 'xs', 'checkpoint_data', 'code'],
          }, 137], ['CometPersistQueryParams', [], {
            'relative': {},
            'domain': {},
          }, 6231], ['BootloaderConfig', [], {
            'deferBootloads': false,
            'jsRetries': [200, 500],
            'jsRetryAbortNum': 2,
            'jsRetryAbortTime': 5,
            'silentDups': false,
            'hypStep4': false,
            'phdOn': false,
          }, 329], ['CSSLoaderConfig', [], {
            'timeout': 5000,
            'modulePrefix': 'BLCSS:',
            'loadEventSupported': true,
          }, 619], ['CookieCoreConfig', [], {
            'c_user': { 's': 'None' },
            'cppo': { 't': 86400, 's': 'None' },
            'dpr': { 't': 604800, 's': 'None' },
            'fbl_ci': { 't': 31536000, 's': 'None' },
            'fbl_cs': { 't': 31536000, 's': 'None' },
            'fbl_st': { 't': 31536000, 's': 'Strict' },
            'i_user': { 's': 'None' },
            'js_ver': { 't': 604800, 's': 'None' },
            'locale': { 't': 604800, 's': 'None' },
            'm_pixel_ratio': { 't': 604800, 's': 'None' },
            'noscript': { 's': 'None' },
            'presence': { 't': 2592000, 's': 'None' },
            'sfau': { 's': 'None' },
            'usida': { 's': 'None' },
            'vpd': { 't': 5184000, 's': 'Lax' },
            'wd': { 't': 604800, 's': 'Lax' },
            'x-referer': { 's': 'None' },
            'x-src': { 't': 1, 's': 'None' },
          }, 2104], ['CurrentCommunityInitialData', [], {}, 490], ['CurrentEnvironment', [], {
            'facebookdotcom': true,
            'messengerdotcom': false,
            'workplacedotcom': false,
            'instagramdotcom': false,
          }, 827], ['CurrentUserInitialData', [], {
            'ACCOUNT_ID': '0',
            'USER_ID': '0',
            'NAME': '',
            'SHORT_NAME': null,
            'IS_BUSINESS_PERSON_ACCOUNT': false,
            'HAS_SECONDARY_BUSINESS_PERSON': false,
            'IS_FACEBOOK_WORK_ACCOUNT': false,
            'IS_MESSENGER_ONLY_USER': false,
            'IS_DEACTIVATED_ALLOWED_ON_MESSENGER': false,
            'IS_MESSENGER_CALL_GUEST_USER': false,
            'IS_WORK_MESSENGER_CALL_GUEST_USER': false,
            'APP_ID': '256281040558',
            'IS_BUSINESS_DOMAIN': false,
          }, 270], ['DTSGInitialData', [], {}, 258], ['ISB', [], {}, 330], ['LSD', [], { 'token': 'AVoc6G-53Kw' }, 323], ['ServerNonce', [], { 'ServerNonce': 'Y6Qq2Hyn-fxSzmPPtnXM5P' }, 141], ['SiteData', [], {
            'server_revision': 1004457543,
            'client_revision': 1004457543,
            'tier': '',
            'push_phase': 'C3',
            'pkg_cohort': 'PHASED:DEFAULT',
            'haste_session': '18897.PHASED:DEFAULT.2.0.0.0.',
            'pr': 2,
            'haste_site': 'www',
            'be_one_ahead': false,
            'ir_on': true,
            'is_rtl': false,
            'is_comet': false,
            'is_experimental_tier': false,
            'is_jit_warmed_up': true,
            'hsi': '7012472389494302168-0',
            'semr_host_bucket': '5',
            'bl_hash_version': 2,
            'skip_rd_bl': true,
            'comet_env': 0,
            'spin': 4,
            '__spin_r': 1004457543,
            '__spin_b': 'trunk',
            '__spin_t': 1632718460,
            'vip': '157.240.17.17',
          }, 317], ['SprinkleConfig', [], {
            'param_name': 'jazoest',
            'version': 2,
            'should_randomize': false,
          }, 2111], ['UserAgentData', [], {
            'browserArchitecture': '64',
            'browserFullVersion': '93.0',
            'browserMinorVersion': 0,
            'browserName': 'Firefox',
            'browserVersion': 93,
            'deviceName': 'Unknown',
            'engineName': 'Gecko',
            'engineVersion': '93.0',
            'platformArchitecture': '64',
            'platformName': 'Windows',
            'platformVersion': '10',
            'platformFullVersion': '10',
          }, 527], ['PromiseUsePolyfillSetImmediateGK', [], { 'www_always_use_polyfill_setimmediate': false }, 2190], ['KSConfig', [], {
            'killed': {
              '__set': ['MLHUB_FLOW_AUTOREFRESH_SEARCH', 'NEKO_DISABLE_CREATE_FOR_SAP', 'EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT', 'MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING', 'WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING', 'BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE', 'ADS_TEMPLATE_UNIFICATION_IN_IG_STORIES', 'DCP_CYCLE_COUNT_CLASSIFICATION_UI', 'BUY_AT_UI_LINE_DELETE', 'BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API', 'BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API', 'BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API', 'BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API', 'BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API', 'BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API', 'ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION', 'FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION', 'VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG', 'SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME', 'ADS_STORE_VISITS_METRICS_DEPRECATION', 'DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER', 'AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION', 'NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL', 'SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS', 'LAB_NET_NEW_UI_RELEASE', 'POCKET_MONSTERS_CREATE', 'POCKET_MONSTERS_DELETE', 'SRT_BANZAI_SRT_CORE_LOGGER', 'SRT_BANZAI_SRT_MAIN_LOGGER', 'SIMPL_SAMPLING_HEALTH_CARD', 'WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES', 'POCKET_MONSTERS_UPDATE_NAME', 'ADS_INTEGRATION_PORTAL_RELAY_LIVE', 'IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE', 'INTERN_TYPEAHEAD_USE_RELAY_ENVIRONMENT_FROM_CONTEXT', 'MESSENGER_WEB_DISABLE_REQUEST_TIMEOUT', 'ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER', 'RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD', 'WIT_API_DOCS_LIVE_TRANSCRIPT_AND_DYNAMIC_ENTITIES', 'WIT_DOCS_BUILT_IN_INTENTS_SDK'],
            },
            'ko': { '__set': ['3OsLvnSHNTt', '1G7wJ6bJt9K', '9NpkGYwzrPG', '3oh5Mw86USj', '8NAceEy9JZo', '7FOIzos6XJX', '6xuJHOrdskA', '75fREERrb3F', 'rf8JEPGgOi', '4j36SVzvP3w', '4NSq3ZC4ScE', '53gCxKq281G', '3yzzwBY7Npj', '1onzIv0jH6H', '8PlKuowafe8', '1ntjZ2zgf03', '4SIH2GRVX5W', '2dhqRnqXGLQ', '2WgiNOrHVuC', 'amKHb4Cw4WI', '5mNEXob0nTj', '8rDvN9vWdAK', '9cL5o2kjfZo', '5BdzWGmfvrA', 'DDZhogI19W', 'acrJTh9WGdp', '1oOE64fL4wO', '9Gd8qgRxn8z', 'MPMaqnqZ9c', '4MzX0ipjWq', '5XCz1h9Iaw3', '7r6mSP7ofr2', '5zgf0XOYSz7', '6DGPLrRdyts', '65QXccYPZEf', 'afo9WVJs5sX', 'aWxCyi1sEC7', '9kCSDzzr8fu', '9ijMc6Q8cs4', '3asobAtVsyt'] },
          }, 2580], ['JSErrorLoggingConfig', [], {
            'appId': 256281040558,
            'extra': [],
            'reportInterval': 50,
            'sampleWeight': null,
            'sampleWeightKey': '__jssesw',
          }, 2776], ['DataStoreConfig', [], {
            'expandoKey': '__FB_STORE',
            'useExpando': true,
          }, 2915], ['CookieCoreLoggingConfig', [], {
            'maximumIgnorableStallMs': 16.67,
            'sampleRate': 9.7e-5,
            'sampleRateClassic': 1.0e-10,
            'sampleRateFastStale': 1.0e-8,
          }, 3401], ['ImmediateImplementationExperiments', [], { 'prefer_message_channel': true }, 3419], ['DTSGInitData', [], {
            'token': '',
            'async_get_token': '',
          }, 3515], ['UriNeedRawQuerySVConfig', [], { 'uris': ['dms.netmng.com', 'doubleclick.net', 'r.msn.com', 'watchit.sky.com', 'graphite.instagram.com', 'www.kfc.co.th', 'learn.pantheon.io', 'www.landmarkshops.in', 'www.ncl.com', 's0.wp.com', 'www.tatacliq.com', 'bs.serving-sys.com', 'kohls.com', 'lazada.co.th', 'xg4ken.com', 'technopark.ru', 'officedepot.com.mx', 'bestbuy.com.mx', 'booking.com'] }, 3871], ['InitialCookieConsent', [], {
            'deferCookies': false,
            'initialConsent': { '__set': [1] },
            'noCookies': false,
            'shouldShowCookieBanner': false,
          }, 4328], ['TrustedTypesConfig', [], {
            'useTrustedTypes': false,
            'reportOnly': false,
          }, 4548], ['WebConnectionClassServerGuess', [], { 'connectionClass': 'EXCELLENT' }, 4705], ['CometAltpayJsSdkIframeAllowedDomains', [], { 'allowed_domains': ['https:\/\/live.adyen.com', 'https:\/\/integration-facebook.payu.in', 'https:\/\/facebook.payulatam.com', 'https:\/\/secure.payu.com', 'https:\/\/facebook.dlocal.com', 'https:\/\/buy2.boku.com'] }, 4920], ['BootloaderEndpointConfig', [], {
            'debugNoBatching': false,
            'endpointURI': 'https:\/\/fr-fr.facebook.com\/ajax\/bootloader-endpoint\/',
          }, 5094], ['BigPipeExperiments', [], {
            'link_images_to_pagelets': false,
            'enable_bigpipe_plugins': false,
          }, 907], ['AsyncRequestConfig', [], {
            'retryOnNetworkError': '1',
            'useFetchStreamAjaxPipeTransport': false,
          }, 328], ['FbtQTOverrides', [], { 'overrides': {} }, 551], ['FbtResultGK', [], {
            'shouldReturnFbtResult': true,
            'inlineMode': 'NO_INLINE',
          }, 876], ['IntlPhonologicalRules', [], {
            'meta': {},
            'patterns': {},
          }, 1496], ['IntlViewerContext', [], { 'GENDER': 3 }, 772], ['NumberFormatConfig', [], {
            'decimalSeparator': ',',
            'numberDelimiter': '\u00a0',
            'minDigitsForThousandsSeparator': 4,
            'standardDecimalPatternInfo': { 'primaryGroupSize': 3, 'secondaryGroupSize': 3 },
            'numberingSystemData': null,
          }, 54], ['SessionNameConfig', [], { 'seed': '2Phr' }, 757], ['ZeroCategoryHeader', [], {}, 1127], ['ZeroRewriteRules', [], {
            'rewrite_rules': {}, 'whitelist': {
              '\/hr\/r': 1,
              '\/hr\/p': 1,
              '\/zero\/unsupported_browser\/': 1,
              '\/zero\/policy\/optin': 1,
              '\/zero\/optin\/write\/': 1,
              '\/zero\/optin\/legal\/': 1,
              '\/zero\/optin\/free\/': 1,
              '\/about\/privacy\/': 1,
              '\/about\/privacy\/update\/': 1,
              '\/about\/privacy\/update': 1,
              '\/zero\/toggle\/welcome\/': 1,
              '\/zero\/toggle\/nux\/': 1,
              '\/zero\/toggle\/settings\/': 1,
              '\/fup\/interstitial\/': 1,
              '\/work\/landing': 1,
              '\/work\/login\/': 1,
              '\/work\/email\/': 1,
              '\/ai.php': 1,
              '\/js_dialog_resources\/dialog_descriptions_android.json': 0,
              '\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/': 0,
              '\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/': 0,
              '\/connect\/jsdialog\/MPlatformLikeJSDialog\/': 0,
              '\/qp\/interstitial\/': 1,
              '\/qp\/action\/redirect\/': 1,
              '\/qp\/action\/close\/': 1,
              '\/zero\/support\/ineligible\/': 1,
              '\/zero_balance_redirect\/': 1,
              '\/zero_balance_redirect': 1,
              '\/zero_balance_redirect\/l\/': 1,
              '\/l.php': 1,
              '\/lsr.php': 1,
              '\/ajax\/dtsg\/': 1,
              '\/checkpoint\/block\/': 1,
              '\/exitdsite': 1,
              '\/zero\/balance\/pixel\/': 1,
              '\/zero\/balance\/': 1,
              '\/zero\/balance\/carrier_landing\/': 1,
              '\/zero\/flex\/logging\/': 1,
              '\/tr': 1,
              '\/tr\/': 1,
              '\/sem_campaigns\/sem_pixel_test\/': 1,
              '\/bookmarks\/flyout\/body\/': 1,
              '\/zero\/subno\/': 1,
              '\/confirmemail.php': 1,
              '\/policies\/': 1,
              '\/mobile\/internetdotorg\/classifier\/': 1,
              '\/zero\/dogfooding': 1,
              '\/xti.php': 1,
              '\/zero\/fblite\/config\/': 1,
              '\/hr\/zsh\/wc\/': 1,
              '\/ajax\/bootloader-endpoint\/': 1,
              '\/mobile\/zero\/carrier_page\/': 1,
              '\/mobile\/zero\/carrier_page\/education_page\/': 1,
              '\/mobile\/zero\/carrier_page\/feature_switch\/': 1,
              '\/mobile\/zero\/carrier_page\/settings_page\/': 1,
              '\/aloha_check_build': 1,
              '\/upsell\/zbd\/softnudge\/': 1,
              '\/mobile\/zero\/af_transition\/': 1,
              '\/mobile\/zero\/af_transition\/action\/': 1,
              '\/mobile\/zero\/freemium\/': 1,
              '\/mobile\/zero\/freemium\/redirect\/': 1,
              '\/mobile\/zero\/freemium\/zero_fup\/': 1,
              '\/privacy\/policy\/': 1,
              '\/privacy\/center\/': 1,
              '\/4oh4.php': 1,
              '\/autologin.php': 1,
              '\/birthday_help.php': 1,
              '\/checkpoint\/': 1,
              '\/contact-importer\/': 1,
              '\/cr.php': 1,
              '\/legal\/terms\/': 1,
              '\/login.php': 1,
              '\/login\/': 1,
              '\/mobile\/account\/': 1,
              '\/n\/': 1,
              '\/remote_test_device\/': 1,
              '\/upsell\/buy\/': 1,
              '\/upsell\/buyconfirm\/': 1,
              '\/upsell\/buyresult\/': 1,
              '\/upsell\/promos\/': 1,
              '\/upsell\/continue\/': 1,
              '\/upsell\/h\/promos\/': 1,
              '\/upsell\/loan\/learnmore\/': 1,
              '\/upsell\/purchase\/': 1,
              '\/upsell\/promos\/upgrade\/': 1,
              '\/upsell\/buy_redirect\/': 1,
              '\/upsell\/loan\/buyconfirm\/': 1,
              '\/upsell\/loan\/buy\/': 1,
              '\/upsell\/sms\/': 1,
              '\/wap\/a\/channel\/reconnect.php': 1,
              '\/wap\/a\/nux\/wizard\/nav.php': 1,
              '\/wap\/appreg.php': 1,
              '\/wap\/birthday_help.php': 1,
              '\/wap\/c.php': 1,
              '\/wap\/confirmemail.php': 1,
              '\/wap\/cr.php': 1,
              '\/wap\/login.php': 1,
              '\/wap\/r.php': 1,
              '\/zero\/datapolicy': 1,
              '\/a\/timezone.php': 1,
              '\/a\/bz': 1,
              '\/bz\/reliability': 1,
              '\/r.php': 1,
              '\/mr\/': 1,
              '\/reg\/': 1,
              '\/registration\/log\/': 1,
              '\/terms\/': 1,
              '\/f123\/': 1,
              '\/expert\/': 1,
              '\/experts\/': 1,
              '\/terms\/index.php': 1,
              '\/terms.php': 1,
              '\/srr\/': 1,
              '\/msite\/redirect\/': 1,
              '\/fbs\/pixel\/': 1,
              '\/contactpoint\/preconfirmation\/': 1,
              '\/contactpoint\/cliff\/': 1,
              '\/contactpoint\/confirm\/submit\/': 1,
              '\/contactpoint\/confirmed\/': 1,
              '\/contactpoint\/login\/': 1,
              '\/preconfirmation\/contactpoint_change\/': 1,
              '\/help\/contact\/': 1,
              '\/survey\/': 1,
              '\/upsell\/loyaltytopup\/accept\/': 1,
              '\/settings\/': 1,
              '\/lite\/': 1,
              '\/zero_status_update\/': 1,
              '\/operator_store\/': 1,
              '\/upsell\/': 1,
              '\/wifiauth\/login\/': 1,
            },
          }, 1478], ['IntlNumberTypeConfig', [], { 'impl': 'if ((n === 0 || n === 1)) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }' }, 3405], ['ServerTimeData', [], {
            'serverTime': 1632718460468,
            'timeOfRequestStart': 1632718460445.7,
            'timeOfResponseStart': 1632718460445.7,
          }, 5943], ['AnalyticsCoreData', [], {
            'device_id': '$^|AcYi9Xo3tDwG_VcfgPTI6vuh7ICiZ6U4girxWDPiUncQZUyNSYxvUjsvXQTE_Svt0XLcOzu6fNe9RcJlmTxh03vWTpnLoysDtw|fd.AcZvLFG9hxugvNzfA9yrPpWM0GBUqK0OhB4vFVu5Fl_epTf5jOca-nUmH-G_UB---nLNr8e_JPGO4pdK6X3EHYP5',
            'app_id': '256281040558',
            'enable_bladerunner': false,
            'enable_ack': true,
            'push_phase': 'C3',
            'enable_observer': false,
          }, 5237], ['cr:696703', [], { '__rc': [null, 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:708886', ['EventProfilerImpl'], { '__rc': ['EventProfilerImpl', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:717822', ['TimeSliceImpl'], { '__rc': ['TimeSliceImpl', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:806696', ['clearTimeoutBlue'], { '__rc': ['clearTimeoutBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:807042', ['setTimeoutBlue'], { '__rc': ['setTimeoutBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:896462', ['setIntervalAcrossTransitionsBlue'], { '__rc': ['setIntervalAcrossTransitionsBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:986633', ['setTimeoutAcrossTransitionsBlue'], { '__rc': ['setTimeoutAcrossTransitionsBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1003267', ['clearIntervalBlue'], { '__rc': ['clearIntervalBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1183579', ['InlineFbtResultImpl'], { '__rc': ['InlineFbtResultImpl', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:925100', ['RunBlue'], { '__rc': ['RunBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:729414', ['VisualCompletion'], { '__rc': ['VisualCompletion', 'Aa3nX_cgyzxuAnu5LxKQXDlPbg-sxTRPSIquC8-U1slDs7sYTzH9PMf61PkbUa25U7-OmSVRAboIcjcaQx8djwpT'] }, -1], ['cr:1094907', [], { '__rc': [null, 'Aa1yaibI9wU4td9PZw_9jb0h1MCy3YK0hxd5e8y_7x1GzaWPok1xIWUzHS4nf7b8zLZs20lrmazN9QpEzCxdohk'] }, -1], ['EventConfig', [], {
            'sampling': {
              'bandwidth': 0,
              'play': 0,
              'playing': 0,
              'progress': 0,
              'pause': 0,
              'ended': 0,
              'seeked': 0,
              'seeking': 0,
              'waiting': 0,
              'loadedmetadata': 0,
              'canplay': 0,
              'selectionchange': 0,
              'change': 0,
              'timeupdate': 0,
              'adaptation': 0,
              'focus': 0,
              'blur': 0,
              'load': 0,
              'error': 0,
              'message': 0,
              'abort': 0,
              'storage': 0,
              'scroll': 200000,
              'mousemove': 20000,
              'mouseover': 10000,
              'mouseout': 10000,
              'mousewheel': 1,
              'MSPointerMove': 10000,
              'keydown': 0.1,
              'click': 0.02,
              'mouseup': 0.02,
              '__100ms': 0.001,
              '__default': 5000,
              '__min': 100,
              '__interactionDefault': 200,
              '__eventDefault': 100000,
            },
            'page_sampling_boost': 1,
            'interaction_regexes': {},
            'interaction_boost': {},
            'event_types': {},
            'manual_instrumentation': false,
            'profile_eager_execution': false,
            'disable_heuristic': true,
            'disable_event_profiler': false,
          }, 1726], ['AdsInterfacesSessionConfig', [], {}, 2393], ['IntlCurrentLocale', [], { 'code': 'fr_FR' }, 5954], ['USIDMetadata', [], {
            'browser_id': '?',
            'tab_id': '',
            'page_id': 'Pr02tmk1uhga4u',
            'transition_id': 0,
            'version': 6,
          }, 5888], ['cr:1367102', [], { '__rc': [null, 'Aa1QvYw49HhoBLVcu67KnKA2PZ05u4sitcS9dXMqkhAIN5hOOt02a_dyYaIS-9108oAlYklv71eazJzp0K-Vhtb1'] }, -1], ['cr:1984081', [], { '__rc': [null, 'Aa03m9ycXDesH3Oe-HGTbp3ajTGwDOeN4IGidPR4vg-R0TgHHs4B85_liClf0UGCmPwO_ZtZNCrsFgPgbOO1PEeLE_5V'] }, -1]],
          'require': [['markJSEnabled'], ['lowerDomain'], ['URLFragmentPrelude'], ['Primer'], ['BigPipe'], ['Bootloader'], ['TimeSlice'], ['AsyncRequest'], ['BanzaiScuba_DEPRECATED'], ['VisualCompletionGating'], ['FbtLogging'], ['IntlQtEventFalcoEvent'], ['RequireDeferredReference', 'unblock', [], [['AsyncRequest', 'BanzaiScuba_DEPRECATED', 'VisualCompletionGating', 'FbtLogging', 'IntlQtEventFalcoEvent'], 'sd']], ['RequireDeferredReference', 'unblock', [], [['AsyncRequest', 'BanzaiScuba_DEPRECATED', 'VisualCompletionGating', 'FbtLogging', 'IntlQtEventFalcoEvent'], 'css']]],
        })
      })</script>
</head>
<body class="fbIndex UIPage_LoggedOut _-kb _605a b_c3pyn-ahh gecko win x2 Locale_fr_FR" dir="ltr">
    <script type="text/javascript"
            nonce="Bnsmr6JE">requireLazy(['bootstrapWebSession'], function (j) {j(1632718460)})</script>
    <div class="_li" id="u_0_3_+C">
        <div class="_3_s0 _1toe _3_s1 _3_s1 uiBoxGray noborder" data-testid="ax-navigation-menubar" id="u_0_4_jV">
            <div class="_608m">
                <div class="clearfix _ikh _tb6">
                    <div class="_4bl7"><span class="mrm _3bcv _50f3">Aller vers</span></div>
                    <div class="_4bl9 _3bcp">
                        <div class="_6a _608n" aria-label="Assistant de navigation" role="menubar" id="u_0_5_TV">
                            <div class="_6a uiPopover" id="u_0_6_qW"><a role="button"
                                                                        class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy"
                                                                        href="#" style="max-width:200px;"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        rel="toggle" id="u_0_7_f3"><span class="_55pe">Sections
                                        de cette Page</span><span class="_4o_3 _3-99"><i
                                          class="img sp_zWveCALGYVG_2x sx_0d4bda"></i></span></a></div>
                            <div class="_6a _3bcs"></div>
                            <div class="_6a mrm uiPopover" id="u_0_8_NK"><a role="button"
                                                                            class="_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy"
                                                                            href="#" style="max-width:200px;"
                                                                            aria-haspopup="true" tabindex="-1"
                                                                            aria-expanded="false" rel="toggle"
                                                                            id="u_0_9_1p"><span class="_55pe">Aide
                                        accessibilité</span><span class="_4o_3 _3-99"><i
                                          class="img sp_zWveCALGYVG_2x sx_71a6b2"></i></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="globalContainer" class="uiContextualLayerParent">
            <div class="fb_content clearfix " id="content" role="main">
                <div>
                    <div class="_8esj _95k9 _8esf _8opv _8f3m _8ilg _8icx _8op_ _95ka">
                        <div class="_8esk">
                            <div class="_8esl">
                                <div class="_8ice"><img class="fb_logo _8ilh img"
                                                        src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                                                        alt="Facebook"/></div>
                                <h2 class="_8eso">Avec Facebook, partagez et restez en contact avec votre
                                    entourage.</h2></div>
                            <div class="_8esn">
                                <div class="_8iep _8icy _9ahz _9ah-">
                                    <div class="_6luv _52jv">
                                        <form class="_9vtf" data-testid="royal_login_form"
                                              action="/login/identify/login.php/?login_attempt=1&amp;lwv=100"
                                              method="post"><input type="hidden"
                                                                   name="jazoest" value="2829"
                                                                   autocomplete="off"/><input
                                              type="hidden" name="lsd" value="AVoc6G-53Kw" autocomplete="off"/>
                                            <div>
                                                <div class="_6lux"><input type="text" class="inputtext _55r1 _6luy"
                                                                          name="email" id="email"
                                                                          data-testid="royal_email"
                                                                          placeholder="Adresse e-mail ou num&#xe9;ro de t&#xe9;l."
                                                                          autofocus="1"
                                                                          aria-label="Adresse e-mail ou num&#xe9;ro de t&#xe9;l."/>
                                                </div>
                                                <div class="_6lux">
                                                    <div class="_6luy _55r1 _1kbt" id="passContainer"><input
                                                          type="password" class="inputtext _55r1 _6luy _9npi"
                                                          name="pass"
                                                          id="pass" data-testid="royal_pass" placeholder="Mot de passe"
                                                          aria-label="Mot de passe"/>
                                                        <div class="_9ls7" id="u_0_b_ym"><a href="#" role="button">
                                                                <div class="_9lsa">
                                                                    <div class="_9lsb" id="u_0_c_oE"></div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <input type="hidden" autocomplete="off" name="login_source"
                                                   value="comet_headerless_login"/><input type="hidden"
                                                                                          autocomplete="off" name="next"
                                                                                          value=""/>
                                            <div class="_6ltg">
                                                <button value="1" class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy"
                                                        name="login" data-testid="royal_login_button" type="submit"
                                                        id="u_0_d_mM">Se connecter
                                                </button>
                                            </div>
                                            <div class="_6ltj"><a
                                                  href="/login/identify/reset.php?ctx=recover&ars=facebook_login&from_login_screen=0">Mot
                                                    de passe oublié ?</a></div>
                                            <div class="_8icz"></div>
                                            <div class="_6ltg"><a role="button"
                                                                  class="_42ft _4jy0 _6lti _4jy6 _4jy2 selected _51sy"
                                                                  href="#" ajaxify="/reg/spotlight/" id="u_0_2_Qd"
                                                                  data-testid="open-registration-form-button"
                                                                  rel="async">Créer nouveau compte</a></div>
                                        </form>
                                    </div>
                                    <div id="reg_pages_msg" class="_58mk"><a
                                          href="/pages/create/?ref_type=registration_form" class="_8esh">Créer une Page</a>
                                        pour une célébrité, un groupe ou une entreprise.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="_95ke _8opy">
                    <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                        <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                            <li>Français (France)</li>
                            <li><a class="_sv4" dir="ltr" href="https://de-de.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;fr_FR&quot;, &quot;https:\/\/de-de.facebook.com\/&quot;, &quot;www_list_selector&quot;, 0); return false;"
                                   title="German">Deutsch</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://www.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;en_US&quot;, &quot;fr_FR&quot;, &quot;https:\/\/www.facebook.com\/&quot;, &quot;www_list_selector&quot;, 1); return false;"
                                   title="English (US)">English (US)</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://it-it.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;fr_FR&quot;, &quot;https:\/\/it-it.facebook.com\/&quot;, &quot;www_list_selector&quot;, 2); return false;"
                                   title="Italian">Italiano</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://pt-pt.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_PT&quot;, &quot;fr_FR&quot;, &quot;https:\/\/pt-pt.facebook.com\/&quot;, &quot;www_list_selector&quot;, 3); return false;"
                                   title="Portuguese (Portugal)">Português (Portugal)</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://sq-al.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;sq_AL&quot;, &quot;fr_FR&quot;, &quot;https:\/\/sq-al.facebook.com\/&quot;, &quot;www_list_selector&quot;, 4); return false;"
                                   title="Albanian">Shqip</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://es-la.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;fr_FR&quot;, &quot;https:\/\/es-la.facebook.com\/&quot;, &quot;www_list_selector&quot;, 5); return false;"
                                   title="Spanish">Español</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://tr-tr.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;tr_TR&quot;, &quot;fr_FR&quot;, &quot;https:\/\/tr-tr.facebook.com\/&quot;, &quot;www_list_selector&quot;, 6); return false;"
                                   title="Turkish">Türkçe</a></li>
                            <li><a class="_sv4" dir="rtl" href="https://ar-ar.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ar_AR&quot;, &quot;fr_FR&quot;, &quot;https:\/\/ar-ar.facebook.com\/&quot;, &quot;www_list_selector&quot;, 7); return false;"
                                   title="Arabic">العربية</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://hi-in.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;hi_IN&quot;, &quot;fr_FR&quot;, &quot;https:\/\/hi-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 8); return false;"
                                   title="Hindi">हिन्दी</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://zh-cn.facebook.com/"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;zh_CN&quot;, &quot;fr_FR&quot;, &quot;https:\/\/zh-cn.facebook.com\/&quot;, &quot;www_list_selector&quot;, 9); return false;"
                                   title="Simplified Chinese (China)">中文(简体)</a></li>
                            <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog"
                                   ajaxify="/settings/language/language/?uri=https%3A%2F%2Fzh-cn.facebook.com%2F&amp;source=www_list_selector_more"
                                   href="#" title="Voir plus de langues"><i class="img sp_zWveCALGYVG_2x sx_312dd0"></i></a>
                            </li>
                        </ul>
                        <div id="contentCurve"></div>
                        <div id="pageFooterChildren" role="contentinfo" aria-label="Liens Facebook">
                            <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                                <li><a href="/r.php" title="Inscrivez-vous sur Facebook">S’inscrire</a></li>
                                <li><a href="/login/" title="Se connecter &#xe0; Facebook">Se connecter</a></li>
                                <li><a href="https://fr-fr.messenger.com/" title="Essayez Messenger.">Messenger</a></li>
                                <li><a href="/lite/" title="Facebook Lite pour Android.">Facebook Lite</a></li>
                                <li><a href="https://fr-fr.facebook.com/watch/"
                                       title="Naviguez parmi nos vid&#xe9;os Watch."> Watch </a></li>
                                <li><a href="/places/"
                                       title="D&#xe9;couvrez les lieux populaires sur Facebook.">Lieux</a></li>
                                <li><a href="/games/" title="D&#xe9;couvrez les jeux Facebook.">Jeux</a></li>
                                <li><a href="/marketplace/" title="Achetez et vendez sur Facebook Marketplace.">Marketplace</a>
                                </li>
                                <li><a href="https://pay.facebook.com/" target="_blank"
                                       title="En savoir plus sur Facebook Pay">Facebook Pay</a></li>
                                <li><a href="/jobs/"
                                       title="Postulez &#xe0; des offres d&#x2019;emploi et recrutez sur Facebook.">Offres
                                        d’emploi</a></li>
                                <li><a href="https://www.oculus.com/" target="_blank" title="En savoir plus sur Oculus">Oculus</a>
                                </li>
                                <li><a href="https://portal.facebook.com/" target="_blank"
                                       title="En savoir plus sur Portal from Facebook">Portal</a></li>
                                <li><a
                                      href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT0Sl1bdwQacQeUIo-DJ_vU13RvKSMiIG0awMb8hDmt5w6mp06Jm06YCdH0PUlIWWtd7eC1LelanOHCrvdt7sMa5MCNVEqTzamdLE5qCE2mo0PREJ20y7cnk5O0nexLwmWJ11d4pz-dr9uuN1xbh7w"
                                      title="D&#xe9;couvrez Instagram" target="_blank" rel="noopener nofollow"
                                      data-lynx-mode="asynclazy">Instagram</a></li>
                                <li><a href="/local/lists/245019872666104/"
                                       title="Parcourir notre annuaire de listes locales.">Local</a></li>
                                <li><a href="/fundraisers/"
                                       title="Faire un don &#xe0; des causes qui le m&#xe9;ritent.">Collectes de
                                        fonds</a></li>
                                <li><a href="/biz/directory/" title="Parcourir notre annuaire des services Facebook.">Services</a>
                                </li>
                                <li><a href="/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D"
                                       title="Voir le Centre d&#x2019;information sur les &#xe9;lections.">Centre
                                        d’information sur les élections</a></li>
                                <li><a href="https://about.facebook.com/" accesskey="8"
                                       title="Consultez notre blog, d&#xe9;couvrez notre centre de ressources et recherchez des offres d&#x2019;emploi.">À
                                        propos</a></li>
                                <li><a
                                      href="/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;nav_source=unknown&amp;extra_1=auto"
                                      title="Diffusez votre publicit&#xe9; sur Facebook.">Créer une publicité</a></li>
                                <li><a href="/pages/create/?ref_type=site_footer" title="Cr&#xe9;ez une Page.">Créer une
                                        Page</a></li>
                                <li><a href="https://developers.facebook.com/?ref=pf"
                                       title="D&#xe9;veloppez sur notre propre plate-forme.">Développeurs</a></li>
                                <li><a href="/careers/?ref=pf"
                                       title="Faites &#xe9;voluer votre carri&#xe8;re en rejoignant notre incroyable entreprise.">Emplois</a>
                                </li>
                                <li><a data-nocookies="1" href="/privacy/explanation"
                                       title="En savoir plus sur Facebook et le respect de votre vie priv&#xe9;e.">Confidentialité</a>
                                </li>
                                <li><a href="/policies/cookies/" title="&#xc0; propos des cookies et de Facebook."
                                       data-nocookies="1">Cookies</a></li>
                                <li><a class="_41ug" data-nocookies="1"
                                       href="https://fr-fr.facebook.com/help/568137493302217"
                                       title="En savoir plus sur Choisir sa pub.">Choisir sa pub<i
                                          class="img sp_zWveCALGYVG_2x sx_f30b63"></i></a></li>
                                <li><a data-nocookies="1" href="/policies?ref=pf" accesskey="9"
                                       title="Prenez connaissance des conditions g&#xe9;n&#xe9;rales et des r&#xe8;glements.">Conditions
                                        générales</a></li>
                                <li><a href="/help/?ref=pf" accesskey="0" title="Consultez les pages d&#x2019;aide.">Aide</a>
                                </li>
                                <li><a accesskey="6" class="accessible_elem" href="/settings"
                                       title="Affichez et modifiez vos param&#xe8;tres Facebook.">Paramètres</a></li>
                                <li><a accesskey="7" class="accessible_elem"
                                       href="/allactivity?privacy_source=activity_log_top_menu"
                                       title="Affichez votre historique personnel">Historique personnel</a></li>
                            </ul>
                        </div>
                        <div class="mvl copyright">
                            <div><span> Facebook © 2021</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div>
        <span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0" style="display:none"/></span>
    </div>
    <div style="display:none"></div>
    <script>requireLazy(['HasteSupportData'], function (m) {
        m.handle({
          'bxData': { '875231': { 'uri': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/yD\/r\/d4ZIVX-5C-b.ico' } },
          'clpData': { '1838142': { 'r': 1, 's': 1 }, '1746397': { 'r': 1, 's': 1 } },
          'gkxData': {
            '4166': { 'result': false, 'hash': 'AT7yrb5QuQ92736uXjQ' },
            '677762': { 'result': false, 'hash': 'AT6e9MvRyXpacwOYllI' },
            '1243461': { 'result': false, 'hash': 'AT7fIw7JO3EJySTce-A' },
            '176': { 'result': true, 'hash': 'AT4NwIszPuVVxWDORRc' },
            '1167394': { 'result': false, 'hash': 'AT7BpN-tlUPwbIIFzTs' },
            '1908135': { 'result': false, 'hash': 'AT6miGypJl3m2Aq4QUU' },
            '3959': { 'result': true, 'hash': 'AT5An4B4pPVNHiK85wc' },
            '819236': { 'result': false, 'hash': 'AT66vW86d2uJ-kXP2fI' },
            '12': { 'result': false, 'hash': 'AT7MdxfOMhMQYcz0XMk' },
            '1646': { 'result': false, 'hash': 'AT4QD7x1GFNYajJZ-ZQ' },
            '729631': { 'result': false, 'hash': 'AT7b0tj8AHWG5lTF38w' },
            '1281505': { 'result': false, 'hash': 'AT4PHZM9gFoypCjQCy0' },
            '1291023': { 'result': false, 'hash': 'AT519LseIG1nwq3oeO8' },
            '1294182': { 'result': false, 'hash': 'AT4vd6mwrtAJouEJtyc' },
            '1399218': { 'result': true, 'hash': 'AT6guCW1eyIkOV1ENAk' },
            '1401060': { 'result': true, 'hash': 'AT5aetN5Gb3reIXVoZ0' },
            '1485055': { 'result': true, 'hash': 'AT5lkGxmhfrVKlcnngw' },
            '1596063': { 'result': false, 'hash': 'AT7JHuDWtaOqRuBU1kY' },
            '1597642': { 'result': true, 'hash': 'AT78G4fDXhlnMl7o21c' },
            '1647260': { 'result': false, 'hash': 'AT4WdkrQSGE5dIsElhU' },
            '1695831': { 'result': false, 'hash': 'AT7RA6TJmDFGF-D62oo' },
            '1722014': { 'result': false, 'hash': 'AT6_M5gpc6RLrHjcqJo' },
            '1742795': { 'result': false, 'hash': 'AT6dbnY5JZm_bTIN8wA' },
            '1778302': { 'result': false, 'hash': 'AT65fisZhmc2X92Eiho' },
            '1840809': { 'result': false, 'hash': 'AT5nYctoTsr7alRiccA' },
            '1848749': { 'result': false, 'hash': 'AT5GsH9Kb-3W-taZ-CY' },
            '1906871': { 'result': false, 'hash': 'AT6dIBiVv9bUDXlmZdA' },
            '1985945': { 'result': true, 'hash': 'AT66Oo5lY__5wUTpzc4' },
            '1099893': { 'result': false, 'hash': 'AT5kly2LSZV_DKGRkoc' },
          },
          'qexData': {
            '1981829': { 'r': null },
            '623': { 'r': null },
            '671': { 'r': null },
            '706': { 'r': null },
            '707': { 'r': null },
          },
        })
      })
      requireLazy(['Bootloader'], function (m) {
        m.handlePayload({
          'sr_revision': 1004457543, 'consistency': { 'rev': 1004457543 }, 'rsrcMap': {
            'Qrpaegl': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4Jo4\/yb\/l\/fr_FR\/ozPZJBVboQA.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ySf8cYD': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yr\/r\/BNzLtjA89q3.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'KxFzGxH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/r\/XpFprvKSai6.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'PKf9GYZ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/ISOOMzX-W9g.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'hdBGvvz': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ix924\/yN\/l\/fr_FR\/aTHnUVwPAEa.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'e0W9dMY': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTOp4\/yO\/l\/fr_FR\/L1d008k8MHH.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'O6fdJCG': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/dATna7NWzvc.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'TUxV68S': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/AEurEMwqHIo.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'acm\/4bj': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibup4\/yD\/l\/fr_FR\/GIiNsGUFjHu.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ufZK\/E\/': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/vRqkLFHDx4V.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'd6TmhbN': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/Tt3ravOuaqE.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '2\/maQ\/Q': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/R9lc5DaDrGJ.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'IfCgv8r': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/r\/4ZUg64ZRRZ_.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'HbZmd6x': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/yl\/l\/fr_FR\/sFSK3jB8Zzl.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'rxHxG1z': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/GN7YyMA5ddn.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'FKLXJfE': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/sV6rEbVnOoV.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '3ESKnbe': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/6LZHL05r2vJ.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'CQMqyvQ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/JEikBAe4aDj.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'VNFIl3N': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/r\/bnTAMrupJic.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'tW++MDr': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i6Zu4\/yd\/l\/fr_FR\/5QCp186_yVx.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '7haSbyr': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iq0-4\/ym\/l\/fr_FR\/b3rU6SKA5X7.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'p3cFJcR': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iYkn4\/yN\/l\/fr_FR\/U5n8lfDJVsy.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '7ESUDWE': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/P0xVWxaibxc.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Sepgo6B': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/XDNv-aAn3yu.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'eofC+wy': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/-2NkmF8LbCl.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'PMKjrCb': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i16N4\/y0\/l\/fr_FR\/th8ALDQu4-7.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Xh\/XUjV': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ihob4\/yw\/l\/fr_FR\/tia7vQR8hOT.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'QNuV5X\/': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/l\/0,cross\/DYtlxMKHNXR.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'o1uOS7E': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ijTO4\/yh\/l\/fr_FR\/JEHdeXhPKNK.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'N+bsq4n': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/XgZxg9Egikl.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'fIGkp+A': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/0kmwFiGSiiO.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'k0GxOrC': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itIM4\/y1\/l\/fr_FR\/l2jtHpRpDzf.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'zwad0VS': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/r\/zCCs_EOJvhg.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'opLOFUy': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iAUN4\/yX\/l\/fr_FR\/I1A0MyyGFxo.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'yooxF7B': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/OboYWOv9OUV.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'jPUq0pD': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTt-4\/y_\/l\/fr_FR\/MZ0yYF_9iHx.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'mwS6pSi': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikQ04\/yt\/l\/fr_FR\/S3iWjF292gc.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '\/Rl5A3r': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/l\/0,cross\/EtfPWGwODe0.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'YyxBaGZ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/yc\/l\/fr_FR\/cR7cG3_b7ix.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'A5W\/cee': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iQKC4\/yp\/l\/fr_FR\/o3c0o-6yo4n.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'dCd\/p2m': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ib6I4\/yo\/l\/fr_FR\/ObsRhBvbbZf.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'DQ9JQyJ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibMY4\/yi\/l\/fr_FR\/Iq7mWql1CPT.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'KK2Z9Fo': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3icU54\/yC\/l\/fr_FR\/V6RPRtkr39J.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '4c1+UwP': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/r\/1SahcKr6k3F.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'AvGOcni': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/ftV3HKbcdxM.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'fI7fIq1': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/A0-Sf4_I9P8.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'bKu1uaO': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/HE7DIRDqsi9.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Z96aU+c': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/r\/z2uTGWRHeWK.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Fbw40HK': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFZQ4\/yj\/l\/fr_FR\/PkBqQ9GCXCm.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'krXhiHv': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_DD4\/yw\/l\/fr_FR\/0j9Y15ACQ22.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ktI3q4+': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/tN8e-lZIAoa.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'CJB5jIX': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/gDAcjxGsSPh.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'fo+tiSR': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/zQxeFeQkfMX.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '\/1fN\/Bb': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/ghMEIJ1D9zl.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'LikKPaE': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_q74\/yU\/l\/fr_FR\/3mQtHzOUMC0.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ByiDAD6': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/r\/jCj1UL2D4sL.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'popcTSQ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/r\/H9J1qJ8Jv0M.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'bme4Lag': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/3mc4XDZ6Guq.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '\/+w7FbO': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/l\/0,cross\/bXQb7KvIOsN.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'bG1x\/rg': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i3eJ4\/yh\/l\/fr_FR\/_A1UeG8lOcp.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'isdlXgl': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/l\/0,cross\/d8VUhrdAbl4.css?_nc_x=Ij3Wp8lg5Kz',
            },
            '60k11wc': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/l\/0,cross\/cvLs005OEE_.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'zPLgIGT': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/lYejkzyV906.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'aHLA98t': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_uz4\/ym\/l\/fr_FR\/cH7a_E2bJYW.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'RZES+TB': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iHXm4\/yS\/l\/fr_FR\/T1QFvq0GjW_.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'YFC1f+b': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iI254\/y3\/l\/fr_FR\/Ou0wKR1sTZQ.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'EUdy7uV': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/6c5__nEKpmO.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'b8E7maP': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ipoU4\/yo\/l\/fr_FR\/AP0TArna3vU.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'da0fSo5': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i8dQ4\/yy\/l\/fr_FR\/ODmKH-vjA7I.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '+MZew45': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ig2-4\/yE\/l\/fr_FR\/MkWGZR32UFk.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'sFOXIKj': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/6W2jbhhe5sX.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'uXVDgGT': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i9ar4\/yB\/l\/fr_FR\/490USa77c1S.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'DrE+kHk': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3icjD4\/yT\/l\/fr_FR\/r7U-Y29og8v.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'iauffFS': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/QwRgLoeVXPU.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'p6ocrQ1': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/399Z3u-FUxu.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'V8YgsOV': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/l\/0,cross\/P2f31NkiCpK.css?_nc_x=Ij3Wp8lg5Kz',
            },
            '6gphrtL': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/l\/0,cross\/Qzamnh4w50f.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'q4C1aFa': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ioOl4\/yp\/l\/fr_FR\/SLs-CH5ltt5.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'hMGDL9a': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/6MIjJE9l6bz.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'L+7UNOC': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/l\/0,cross\/lSRh5y5_hWS.css?_nc_x=Ij3Wp8lg5Kz',
            },
            '2sU+jOw': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iSwL4\/y0\/l\/fr_FR\/qIU2oUe7mQx.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'amUs4B+': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yO\/l\/0,cross\/yKaCFT_G-Mn.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'ATH9bPv': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iloS4\/yo\/l\/fr_FR\/35GGeae91nx.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'zQYQqNb': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/l\/0,cross\/N9kcTOiaTRf.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'Np2b6mH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/5KuuWuBlLaA.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'mXGACHR': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yw\/l\/0,cross\/8a2ADagMMrw.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'oU8\/MN9': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ij7P4\/yy\/l\/fr_FR\/wqBjD3yW45C.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'zrdhUVv': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yq\/l\/0,cross\/1cBiSINatMZ.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'r79vVyj': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yO\/l\/0,cross\/VzI6m82BXfH.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'A2Znj1B': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iGzs4\/yF\/l\/fr_FR\/Z49Uzz6Npse.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'm1pQw1b': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/Nk6Yoi11N-4.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '\/qw6Exm': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ie0v4\/yz\/l\/fr_FR\/5r-fvKsCC-m.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'y+T9wg6': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/l\/0,cross\/do_HMZWJrcz.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'TpcXOhW': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iBDT4\/yw\/l\/fr_FR\/22f2v6a8Yjp.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'FI0fzzi': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/l\/0,cross\/8U29hGiv-do.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'wZ7C2vM': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_494\/ym\/l\/fr_FR\/42weitvbs3e.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'P\/AHfvj': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/yI\/l\/fr_FR\/eWRYv_wAXko.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'zB\/rRDj': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/l\/0,cross\/fldG_lgzgDE.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'C074xdq': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/u60DV4N0tDy.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'avghBYZ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/DV0R6TVxDnB.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'B4jV6ay': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3it3U4\/yt\/l\/fr_FR\/TA0ZkEs1xVl.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'cl4FKLb': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/l\/0,cross\/-nx8itiU3Jb.css?_nc_x=Ij3Wp8lg5Kz',
            },
            '+IbFVYs': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yD\/r\/QliG4I-zoh6.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'f9ky1ix': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iknH4\/yO\/l\/fr_FR\/DFAn5LKfNst.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'dJtSTn8': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/hD9AXy1Yknt.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Fsrrx\/O': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikX74\/yl\/l\/fr_FR\/Z-9pqhzoObi.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '2fT57FI': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/Zcmoa_anfjJ.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ZqWogdD': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/r\/PWYBU9mg__c.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '88vrm\/B': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixy04\/y4\/l\/fr_FR\/AvJwV_TyIJ-.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'UVa7qU7': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/l\/0,cross\/vVeRhhrKbp3.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'YuFdUZF': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixXC4\/yO\/l\/fr_FR\/uDx_fnsiuS5.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'cKXUyua': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNZc4\/y7\/l\/fr_FR\/a5Ich-mBY_N.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'N3iHjKv': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/oSSEqQX8VNm.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'sG2VJmI': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/Lq6UqrVKCEI.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'X\/shsTS': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3io-a4\/yp\/l\/fr_FR\/2UUJzmN_CyA.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'o4872U0': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1dc4\/yu\/l\/fr_FR\/PJtG94o8F3A.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'OBIb\/fW': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yV\/l\/0,cross\/vSEkyCNxZfN.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'E22Znle': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4_f4\/yu\/l\/fr_FR\/vdLAO2jEgKe.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'gWMJgTe': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/iGksp69foR_.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'hIek+bG': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/DZ_VBlsy-dC.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'IPmrcSF': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/_g_ktPAPYvP.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'GJx2DpI': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibHN4\/yX\/l\/fr_FR\/5HFp-eS_5cn.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'bD\/1ONl': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3isLO4\/yc\/l\/fr_FR\/u6z0HqqcoLA.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '+ClWygH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/UJOxW2IHm1a.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'nchbHvH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iaJe4\/yn\/l\/fr_FR\/SSLTyjETokS.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '8ELCBwH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'oE4DofT': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'VvVFw8n': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '94OOneD': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/v1hK-Sp5oi3.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'uRFwY3e': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/z44tIw900d6.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'P\/mr5VE': {
              'type': 'css',
              'src': 'data:text\/css; charset=utf-8;base64,I2Jvb3Rsb2FkZXJfUF9tcjVWRXtoZWlnaHQ6NDJweDt9LmJvb3Rsb2FkZXJfUF9tcjVWRXtkaXNwbGF5OmJsb2NrIWltcG9ydGFudDt9',
              'nc': 1,
              'd': 1,
            },
          }, 'compMap': {
            'AsyncSignal': { 'r': ['Qrpaegl', 'ySf8cYD'], 'be': 1 },
            'ODS': { 'r': ['ySf8cYD', 'KxFzGxH'], 'be': 1 },
            'Dock': {
              'r': ['+0yl4XE', 'PKf9GYZ', 'hdBGvvz', 'Z45zEmb', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH'],
              'be': 1,
            },
            'WebSpeedInteractionsTypedLogger': {
              'r': ['TUxV68S', 'ySf8cYD', 'acm\/4bj'],
              'rds': { 'm': ['BanzaiScuba_DEPRECATED'] },
              'be': 1,
            },
            'AsyncRequest': {
              'r': ['e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'Z45zEmb'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['hdBGvvz'] },
              'be': 1,
            },
            'DOM': { 'r': ['KxFzGxH', 'Z45zEmb'], 'be': 1 },
            'Form': { 'r': ['ufZK\/E\/', 'KxFzGxH', 'Z45zEmb'], 'be': 1 },
            'FormSubmit': {
              'r': ['d6TmhbN', 'ufZK\/E\/', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'Z45zEmb'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED'], 'r': ['hdBGvvz'] },
              'be': 1,
            },
            'Input': { 'r': ['ufZK\/E\/'], 'be': 1 },
            'Live': { 'r': ['2\/maQ\/Q', 'e0W9dMY', 'Qrpaegl', 'IfCgv8r', 'ySf8cYD', 'KxFzGxH', 'Z45zEmb'], 'be': 1 },
            'Toggler': {
              'r': ['+0yl4XE', 'PKf9GYZ', 'hdBGvvz', 'Z45zEmb', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH'],
              'be': 1,
            },
            'Tooltip': {
              'r': ['+0yl4XE', 'PKf9GYZ', 'HbZmd6x', 'hdBGvvz', 'Z45zEmb', 'rxHxG1z', 'e0W9dMY', 'jmUWq5N', 'FKLXJfE', '3ESKnbe', 'CQMqyvQ', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'VNFIl3N', 'ufZK\/E\/', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent', 'PageTransitions', 'BanzaiScuba_DEPRECATED', 'Animation'] },
              'be': 1,
            },
            'URI': { 'r': [], 'be': 1 },
            'trackReferrer': { 'r': [], 'rds': { 'm': ['BanzaiScuba_DEPRECATED'], 'r': ['ySf8cYD'] }, 'be': 1 },
            'PhotoTagApproval': { 'r': ['tW++MDr', '7haSbyr', 'KxFzGxH', 'Z45zEmb'], 'be': 1 },
            'PhotoSnowlift': {
              'r': ['p3cFJcR', '7ESUDWE', '+0yl4XE', 'Sepgo6B', 'eofC+wy', 'PMKjrCb', 'Xh\/XUjV', 'QNuV5X\/', 'o1uOS7E', 'N+bsq4n', 'fIGkp+A', 'k0GxOrC', 'zwad0VS', 'PKf9GYZ', 'opLOFUy', 'yooxF7B', 'jPUq0pD', 'mwS6pSi', '\/Rl5A3r', 'YyxBaGZ', 'HbZmd6x', 'A5W\/cee', 'dCd\/p2m', 'hdBGvvz', 'DQ9JQyJ', 'KK2Z9Fo', '4c1+UwP', 'AvGOcni', 'fI7fIq1', 'bKu1uaO', 'Z96aU+c', 'Fbw40HK', 'Z45zEmb', 'ufZK\/E\/', 'rxHxG1z', 'krXhiHv', 'ktI3q4+', 'CJB5jIX', 'e0W9dMY', 'jmUWq5N', 'FKLXJfE', 'fo+tiSR', '\/1fN\/Bb', 'LikKPaE', 'ByiDAD6', 'popcTSQ', 'bme4Lag', '\/+w7FbO', '3ESKnbe', 'bG1x\/rg', 'CQMqyvQ', 'iKnZGfK', 'isdlXgl', '60k11wc', 'zPLgIGT', 'ySf8cYD', 'aHLA98t', '7haSbyr', 'RZES+TB', 'O6fdJCG', 'YFC1f+b', 'KxFzGxH', 'EUdy7uV', 'b8E7maP', 'da0fSo5', '+MZew45', 'VNFIl3N', 'acm\/4bj'],
              'rds': {
                'm': ['Animation', 'VisualCompletionGating', 'FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED', 'PageTransitions'],
                'r': ['sFOXIKj'],
              },
              'be': 1,
            },
            'PhotoTagger': {
              'r': ['uXVDgGT', 'p3cFJcR', '7ESUDWE', 'DrE+kHk', '+0yl4XE', 'eofC+wy', 'iauffFS', 'p6ocrQ1', 'V8YgsOV', 'o1uOS7E', '6gphrtL', 'q4C1aFa', 'hMGDL9a', 'N+bsq4n', 'fIGkp+A', 'k0GxOrC', 'PKf9GYZ', 'opLOFUy', 'L+7UNOC', '2sU+jOw', 'yooxF7B', 'amUs4B+', 'mwS6pSi', '\/Rl5A3r', 'YyxBaGZ', 'ATH9bPv', 'zQYQqNb', 'Np2b6mH', 'mXGACHR', 'HbZmd6x', 'A5W\/cee', 'dCd\/p2m', 'oU8\/MN9', 'hdBGvvz', 'zrdhUVv', 'DQ9JQyJ', 'KK2Z9Fo', 'r79vVyj', 'A2Znj1B', '4c1+UwP', 'AvGOcni', 'bKu1uaO', 'Z96aU+c', 'Fbw40HK', 'Z45zEmb', 'ufZK\/E\/', 'rxHxG1z', 'm1pQw1b', 'krXhiHv', '\/qw6Exm', 'y+T9wg6', 'TpcXOhW', 'CJB5jIX', 'FI0fzzi', 'e0W9dMY', 'wZ7C2vM', 'jmUWq5N', 'FKLXJfE', 'fo+tiSR', '\/1fN\/Bb', 'LikKPaE', 'Qrpaegl', 'popcTSQ', 'P\/AHfvj', 'bme4Lag', '\/+w7FbO', '3ESKnbe', 'bG1x\/rg', 'CQMqyvQ', 'zB\/rRDj', 'iKnZGfK', '60k11wc', 'zPLgIGT', 'ySf8cYD', '7haSbyr', 'C074xdq', 'RZES+TB', 'O6fdJCG', 'YFC1f+b', 'KxFzGxH', 'b8E7maP', 'avghBYZ', 'B4jV6ay', 'da0fSo5', '+MZew45', 'VNFIl3N', 'acm\/4bj', 'cl4FKLb', '+IbFVYs', 'f9ky1ix', 'dJtSTn8'],
              'rdfds': {
                'm': ['GamesVideoModerationRulesNux.react', 'GamesVideoDeleteCommentDialog.react', 'GamesVideoCommentRemovedDialog.react', 'CometTooltipDeferredImpl.react'],
                'r': ['Fsrrx\/O', '2fT57FI', 'ZqWogdD', '88vrm\/B', 'UVa7qU7', 'YuFdUZF', 'cKXUyua', 'N3iHjKv'],
              },
              'rds': {
                'm': ['PresenceStatus', 'FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED', 'Animation', 'PageTransitions', 'LynxAsyncCallbackFalcoEvent', 'CometSuspenseFalcoEvent'],
                'r': ['sG2VJmI', 'IfCgv8r', 'X\/shsTS', 'o4872U0'],
              },
              'be': 1,
            },
            'PhotoTags': { 'r': ['tW++MDr', '7haSbyr', 'O6fdJCG', 'KxFzGxH', 'Z45zEmb'], 'be': 1 },
            'TagTokenizer': {
              'r': ['iauffFS', 'PKf9GYZ', 'tW++MDr', 'Z96aU+c', 'Z45zEmb', 'ufZK\/E\/', 'OBIb\/fW', 'jmUWq5N', 'LikKPaE', '\/+w7FbO', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'E22Znle'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['hdBGvvz'] },
              'be': 1,
            },
            'AsyncDialog': {
              'r': ['+0yl4XE', 'k0GxOrC', 'PKf9GYZ', 'YyxBaGZ', 'hdBGvvz', 'Z45zEmb', 'ufZK\/E\/', 'e0W9dMY', 'jmUWq5N', 'FKLXJfE', '\/1fN\/Bb', '3ESKnbe', 'CQMqyvQ', 'iKnZGfK', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'] },
              'be': 1,
            },
            'Hovercard': {
              'r': ['+0yl4XE', 'k0GxOrC', 'PKf9GYZ', 'mwS6pSi', 'HbZmd6x', 'hdBGvvz', 'Z45zEmb', 'ufZK\/E\/', 'rxHxG1z', 'FI0fzzi', 'e0W9dMY', 'FKLXJfE', 'P\/AHfvj', '\/+w7FbO', '3ESKnbe', 'CQMqyvQ', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED', 'PageTransitions', 'Animation'] },
              'be': 1,
            },
            'XSalesPromoWWWDetailsDialogAsyncController': { 'r': ['gWMJgTe'], 'be': 1 },
            'XOfferController': { 'r': ['hIek+bG'], 'be': 1 },
            'PerfXSharedFields': { 'r': ['O6fdJCG', 'KxFzGxH'], 'be': 1 },
            'KeyEventTypedLogger': {
              'r': ['IPmrcSF', 'ySf8cYD', 'acm\/4bj'],
              'rds': { 'm': ['BanzaiScuba_DEPRECATED'] },
              'be': 1,
            },
            'Dialog': {
              'r': ['+0yl4XE', 'PKf9GYZ', 'opLOFUy', 'hdBGvvz', 'Z45zEmb', 'ufZK\/E\/', 'e0W9dMY', 'CQMqyvQ', '60k11wc', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', '3ESKnbe', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent', 'Animation', 'PageTransitions', 'BanzaiScuba_DEPRECATED'] },
              'be': 1,
            },
            'ExceptionDialog': {
              'r': ['p3cFJcR', '+0yl4XE', 'k0GxOrC', 'PKf9GYZ', 'mwS6pSi', 'YyxBaGZ', 'GJx2DpI', 'hdBGvvz', 'bD\/1ONl', 'Z45zEmb', 'ufZK\/E\/', 'm1pQw1b', 'e0W9dMY', 'jmUWq5N', '\/1fN\/Bb', '\/+w7FbO', '3ESKnbe', 'bG1x\/rg', 'CQMqyvQ', 'iKnZGfK', 'ySf8cYD', 'aHLA98t', 'O6fdJCG', 'KxFzGxH', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'] },
              'be': 1,
            },
            'QuickSandSolver': {
              'r': ['+ClWygH', 'nchbHvH', '8ELCBwH', 'bKu1uaO', 'ufZK\/E\/', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'Z45zEmb'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['hdBGvvz'] },
              'be': 1,
            },
            'ConfirmationDialog': { 'r': ['oE4DofT', 'PKf9GYZ', 'ufZK\/E\/', 'KxFzGxH', 'Z45zEmb'], 'be': 1 },
            'QPLInspector': { 'r': ['VvVFw8n'], 'be': 1 },
            'ReactDOM': { 'r': ['FKLXJfE', '3ESKnbe', 'VNFIl3N', 'acm\/4bj', 'KxFzGxH', 'Z45zEmb'], 'be': 1 },
            'ContextualLayerInlineTabOrder': {
              'r': ['PKf9GYZ', 'Z45zEmb', 'P\/AHfvj', 'zPLgIGT', 'O6fdJCG', 'YFC1f+b', 'KxFzGxH'],
              'be': 1,
            },
            'XUIDialogButton.react': {
              'r': ['p3cFJcR', '+0yl4XE', 'k0GxOrC', 'PKf9GYZ', 'YyxBaGZ', 'e0W9dMY', '\/1fN\/Bb', '3ESKnbe', 'bG1x\/rg', 'CQMqyvQ', 'iKnZGfK', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'Z45zEmb', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['hdBGvvz'] },
              'be': 1,
            },
            'XUIDialogBody.react': {
              'r': ['p3cFJcR', '+0yl4XE', 'PKf9GYZ', 'Z45zEmb', '3ESKnbe', 'bG1x\/rg', 'CQMqyvQ', 'KxFzGxH', 'VNFIl3N', 'ySf8cYD', 'acm\/4bj'],
              'be': 1,
            },
            'XUIDialogFooter.react': {
              'r': ['p3cFJcR', '+0yl4XE', 'k0GxOrC', 'PKf9GYZ', 'Z45zEmb', 'jmUWq5N', '\/+w7FbO', '3ESKnbe', 'bG1x\/rg', 'CQMqyvQ', 'KxFzGxH', 'VNFIl3N', 'ySf8cYD', 'acm\/4bj'],
              'be': 1,
            },
            'XUIDialogTitle.react': {
              'r': ['+0yl4XE', 'k0GxOrC', 'PKf9GYZ', 'YyxBaGZ', 'e0W9dMY', 'jmUWq5N', '\/1fN\/Bb', '3ESKnbe', 'CQMqyvQ', 'iKnZGfK', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'Z45zEmb', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['hdBGvvz'] },
              'be': 1,
            },
            'XUIGrayText.react': {
              'r': ['p3cFJcR', 'PKf9GYZ', 'Z45zEmb', '3ESKnbe', 'CQMqyvQ', 'aHLA98t', 'KxFzGxH', 'VNFIl3N', 'ySf8cYD', 'acm\/4bj'],
              'be': 1,
            },
            'DialogX': {
              'r': ['+0yl4XE', 'k0GxOrC', 'PKf9GYZ', 'hdBGvvz', 'Z45zEmb', 'ufZK\/E\/', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'] },
              'be': 1,
            },
            'React': { 'r': ['3ESKnbe', 'acm\/4bj'], 'be': 1 },
          },
        })
      })</script>
    <script>requireLazy(['InitialJSLoader'], function (InitialJSLoader) {InitialJSLoader.loadOnDOMContentReady(['94OOneD', 'e0W9dMY', 'uRFwY3e', 'YFC1f+b', 'hdBGvvz', 'ufZK\/E\/', 'PKf9GYZ', '3ESKnbe', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'sFOXIKj', 'FKLXJfE', 'CQMqyvQ', 'zPLgIGT', 'rxHxG1z', 'acm\/4bj', 'VNFIl3N', 'P\/mr5VE'])})</script>
    <script>requireLazy(['TimeSliceImpl', 'ServerJS'], function (TimeSlice, ServerJS) {
        var s = (new ServerJS())
        s.handle({
          'define': [['LinkshimHandlerConfig', [], {
            'supports_meta_referrer': true,
            'default_meta_referrer_policy': 'origin-when-crossorigin',
            'switched_meta_referrer_policy': 'origin',
            'non_linkshim_lnfb_mode': null,
            'link_react_default_hash': 'AT3P0WMjWRGpkL1E0I40yt4O-Yd4A3TCsbO3zClv6ezylVA035-lu4oyNjda8ayZfDYDAuivGZkh3_SxGN0kbuY7Wnku-kmpBDk56_TI-9MuciIecxB08W14-4L_PqZX1kltvSEpP5WftalNnUjCGQ',
            'untrusted_link_default_hash': 'AT1qoDTRfLMrELon2c8M6eJPVnZiZKZ51QV5U761J8hgnVHN4dlwSmwjPyw0lrs5O85gEW2EkvNvn28tpkzCwZphBHSn0HvRVzeIQsbb-aOR99JWovEWM3wk5qVhkCm5wAzN4fcPWRWb2n2TLXTVSA',
            'linkshim_host': 'l.facebook.com',
            'linkshim_path': '\/l.php',
            'linkshim_enc_param': 'h',
            'linkshim_url_param': 'u',
            'use_rel_no_opener': true,
            'always_use_https': true,
            'onion_always_shim': true,
            'middle_click_requires_event': true,
            'www_safe_js_mode': 'asynclazy',
            'm_safe_js_mode': 'MLynx_asynclazy',
            'ghl_param_link_shim': false,
            'click_ids': [],
            'is_linkshim_supported': true,
            'current_domain': 'facebook.com',
            'blocklisted_domains': ['ad.doubleclick.net', 'ads-encryption-url-example.com', 'bs.serving-sys.com', 'ad.atdmt.com', 'adform.net', 'ad13.adfarm1.adition.com', 'ilovemyfreedoms.com', 'secure.adnxs.com'],
            'is_mobile_device': false,
          }, 27]],
          'instances': [['__inst_5b4d0c00_0_0_1J', ['Menu', 'XUIMenuWithSquareCorner', 'XUIMenuTheme'], [[], {
            'id': 'u_0_0_EC',
            'behaviors': [{ '__m': 'XUIMenuWithSquareCorner' }],
            'theme': { '__m': 'XUIMenuTheme' },
          }], 2], ['__inst_5b4d0c00_0_1_N7', ['Menu', 'MenuItem', '__markup_3310c079_0_0_ul', 'HTML', '__markup_3310c079_0_1_eA', '__markup_3310c079_0_2_Y0', '__markup_3310c079_0_3_km', 'XUIMenuWithSquareCorner', 'XUIMenuTheme'], [[{
            'value': 'key_shortcuts',
            'ctor': { '__m': 'MenuItem' },
            'markup': { '__m': '__markup_3310c079_0_0_ul' },
            'label': 'Aide sur les raccourcis clavier...',
            'title': '',
            'className': null,
          }, {
            'href': '\/help\/accessibility',
            'target': '_blank',
            'value': 'help_center',
            'ctor': { '__m': 'MenuItem' },
            'markup': { '__m': '__markup_3310c079_0_1_eA' },
            'label': 'Centre d\u2019aide \u00e0 l\u2019accessibilit\u00e9',
            'title': '',
            'className': null,
          }, {
            'href': '\/help\/contact\/accessibility',
            'target': '_blank',
            'value': 'submit_feedback',
            'ctor': { '__m': 'MenuItem' },
            'markup': { '__m': '__markup_3310c079_0_2_Y0' },
            'label': 'Donner votre avis',
            'title': '',
            'className': null,
          }, {
            'href': '\/accessibility',
            'target': '_blank',
            'value': 'facebook_page',
            'ctor': { '__m': 'MenuItem' },
            'markup': { '__m': '__markup_3310c079_0_3_km' },
            'label': 'Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook',
            'title': 'Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook',
            'className': null,
          }], {
            'id': 'u_0_1_5q',
            'behaviors': [{ '__m': 'XUIMenuWithSquareCorner' }],
            'theme': { '__m': 'XUIMenuTheme' },
          }], 2], ['__inst_e5ad243d_0_0_ap', ['PopoverMenu', '__inst_1de146dc_0_1_4G', '__elem_ec77afbd_0_1_75', '__inst_5b4d0c00_0_1_N7'], [{ '__m': '__inst_1de146dc_0_1_4G' }, { '__m': '__elem_ec77afbd_0_1_75' }, { '__m': '__inst_5b4d0c00_0_1_N7' }, []], 2], ['__inst_e5ad243d_0_1_cm', ['PopoverMenu', '__inst_1de146dc_0_0_dR', '__elem_ec77afbd_0_0_sg', '__inst_5b4d0c00_0_0_1J'], [{ '__m': '__inst_1de146dc_0_0_dR' }, { '__m': '__elem_ec77afbd_0_0_sg' }, { '__m': '__inst_5b4d0c00_0_0_1J' }, []], 2], ['__inst_1de146dc_0_0_dR', ['Popover', '__elem_1de146dc_0_0_TI', '__elem_ec77afbd_0_0_sg', 'ContextualLayerAutoFlip', 'ContextualDialogArrow'], [{ '__m': '__elem_1de146dc_0_0_TI' }, { '__m': '__elem_ec77afbd_0_0_sg' }, [{ '__m': 'ContextualLayerAutoFlip' }, { '__m': 'ContextualDialogArrow' }], {
            'alignh': 'left',
            'position': 'below',
          }], 2], ['__inst_1de146dc_0_1_4G', ['Popover', '__elem_1de146dc_0_1_2P', '__elem_ec77afbd_0_1_75', 'ContextualLayerAutoFlip', 'ContextualDialogArrow'], [{ '__m': '__elem_1de146dc_0_1_2P' }, { '__m': '__elem_ec77afbd_0_1_75' }, [{ '__m': 'ContextualLayerAutoFlip' }, { '__m': 'ContextualDialogArrow' }], {
            'alignh': 'right',
            'position': 'below',
          }], 2]],
          'markup': [['__markup_3310c079_0_0_ul', { '__html': 'Aide sur les raccourcis clavier...' }, 1], ['__markup_3310c079_0_1_eA', { '__html': 'Centre d\u2019aide \u00e0 l\u2019accessibilit\u00e9' }, 1], ['__markup_3310c079_0_2_Y0', { '__html': 'Donner votre avis' }, 1], ['__markup_3310c079_0_3_km', { '__html': 'Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook' }, 1]],
          'elements': [['__elem_a588f507_0_1_Ni', 'u_0_3_+C', 1], ['__elem_3fc3da18_0_0_H+', 'u_0_4_jV', 1], ['__elem_51be6cb7_0_0_iW', 'u_0_5_TV', 1], ['__elem_1de146dc_0_0_TI', 'u_0_6_qW', 1], ['__elem_ec77afbd_0_0_sg', 'u_0_7_f3', 2], ['__elem_1de146dc_0_1_2P', 'u_0_8_NK', 1], ['__elem_ec77afbd_0_1_75', 'u_0_9_1p', 2], ['__elem_a588f507_0_0_EX', 'globalContainer', 2], ['__elem_a588f507_0_2_ds', 'content', 1], ['__elem_835c633a_0_0_nW', 'u_0_a_vH', 1], ['__elem_9f5fac15_0_0_aC', 'passContainer', 1], ['__elem_558608f3_0_0_MS', 'pass', 1], ['__elem_a588f507_0_3_Ra', 'u_0_b_ym', 1], ['__elem_a588f507_0_4_mJ', 'u_0_c_oE', 1], ['__elem_45d73b5d_0_0_+d', 'u_0_d_mM', 1]],
          'require': [['ServiceWorkerLoginAndLogout', 'login', [], []], ['WebPixelRatioDetector', 'startDetecting', [], [false]], ['ScriptPath', 'set', [], ['XIndexReduxController', 'a1f3c513', {
            'imp_id': '1BrTtmDJLGtF20TH2',
            'ef_page': null,
            'uri': 'https:\/\/fr-fr.facebook.com\/',
          }]], ['UITinyViewportAction', 'init', [], []], ['ResetScrollOnUnload', 'init', ['__elem_a588f507_0_0_EX'], [{ '__m': '__elem_a588f507_0_0_EX' }]], ['AccessibilityWebVirtualCursorClickLogger', 'init', ['__elem_a588f507_0_0_EX'], [[{ '__m': '__elem_a588f507_0_0_EX' }]]], ['KeyboardActivityLogger', 'init', [], []], ['FocusRing', 'init', [], []], ['HardwareCSS', 'init', [], []], ['NavigationAssistantController', 'init', ['__elem_3fc3da18_0_0_H+', '__elem_51be6cb7_0_0_iW', '__inst_5b4d0c00_0_0_1J', '__inst_5b4d0c00_0_1_N7', '__inst_e5ad243d_0_0_ap', '__inst_e5ad243d_0_1_cm'], [{ '__m': '__elem_3fc3da18_0_0_H+' }, { '__m': '__elem_51be6cb7_0_0_iW' }, { '__m': '__inst_5b4d0c00_0_0_1J' }, { '__m': '__inst_5b4d0c00_0_1_N7' }, null, {
            'accessibilityPopoverMenu': { '__m': '__inst_e5ad243d_0_0_ap' },
            'globalPopoverMenu': null,
            'sectionsPopoverMenu': { '__m': '__inst_e5ad243d_0_1_cm' },
          }]], ['__inst_e5ad243d_0_1_cm'], ['__inst_1de146dc_0_0_dR'], ['__inst_e5ad243d_0_0_ap'], ['__inst_1de146dc_0_1_4G'], ['IntlUtils'], ['FBLynx', 'setupDelegation', [], []], ['LoginFormController', 'init', ['__elem_835c633a_0_0_nW', '__elem_45d73b5d_0_0_+d'], [{ '__m': '__elem_835c633a_0_0_nW' }, { '__m': '__elem_45d73b5d_0_0_+d' }, null, true, {
            'pubKey': {
              'publicKey': '450604cb48d22517ae1e877555915a761c674d95476cb044985a81ecbb438634',
              'keyId': 168,
            },
          }]], ['BrowserPrefillLogging', 'initContactpointFieldLogging', [], [{
            'contactpointFieldID': 'email',
            'serverPrefill': '',
          }]], ['BrowserPrefillLogging', 'initPasswordFieldLogging', [], [{ 'passwordFieldID': 'pass' }]], ['FocusListener'], ['FlipDirectionOnKeypress'], ['LoginFormToggle', 'initToggle', ['__elem_a588f507_0_3_Ra', '__elem_a588f507_0_4_mJ', '__elem_558608f3_0_0_MS', '__elem_9f5fac15_0_0_aC'], [{ '__m': '__elem_a588f507_0_3_Ra' }, { '__m': '__elem_a588f507_0_4_mJ' }, { '__m': '__elem_558608f3_0_0_MS' }, { '__m': '__elem_9f5fac15_0_0_aC' }]], ['Animation'], ['PageTransitions'], ['RequireDeferredReference', 'unblock', [], [['BanzaiScuba_DEPRECATED', 'Animation', 'FbtLogging', 'IntlQtEventFalcoEvent', 'PageTransitions'], 'sd']], ['RequireDeferredReference', 'unblock', [], [['BanzaiScuba_DEPRECATED', 'Animation', 'FbtLogging', 'IntlQtEventFalcoEvent', 'PageTransitions'], 'css']], ['TimeSliceImpl'], ['HasteSupportData'], ['ServerJS'], ['Run'], ['InitialJSLoader']],
          'contexts': [[{ '__m': '__elem_a588f507_0_1_Ni' }, true], [{ '__m': '__elem_a588f507_0_2_ds' }, true]],
        })
        requireLazy(['Run'], function (Run) {Run.onAfterLoad(function () {s.cleanup(TimeSlice)})})
      })

      onloadRegister_DEPRECATED(function () {useragentcm()})</script>
    <script>now_inl = (function () {
        var p = window.performance
        return p && p.now && p.timing && p.timing.navigationStart ? function () {return p.now() + p.timing.navigationStart} : function () {return new Date().getTime()}
      })()
      window.__bigPipeFR = now_inl()</script>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yn/l/0,cross/dl3DlJiBeI_.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yx/l/0,cross/NoOICvUTSrn.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y5/l/0,cross/1hIljvzMwV2.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/l/0,cross/d09TEKYkymm.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iTOp4/yO/l/fr_FR/L1d008k8MHH.js?_nc_x=Ij3Wp8lg5Kz"
          as="script" crossorigin="anonymous" nonce="Bnsmr6JE"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/BNzLtjA89q3.js?_nc_x=Ij3Wp8lg5Kz" as="script"
          crossorigin="anonymous" nonce="Bnsmr6JE"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/dATna7NWzvc.js?_nc_x=Ij3Wp8lg5Kz" as="script"
          crossorigin="anonymous" nonce="Bnsmr6JE"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/XpFprvKSai6.js?_nc_x=Ij3Wp8lg5Kz" as="script"
          crossorigin="anonymous" nonce="Bnsmr6JE"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/l/0,cross/3vd1fhGzZ3o.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <script>window.__bigPipeCtor = now_inl()
      requireLazy(['BigPipe'], function (BigPipe) {
        define('__bigPipe', [], window.bigPipe = new BigPipe({
          'forceFinish': true,
          'config': { 'flush_pagelets_asap': true, 'dispatch_pagelet_replayable_actions': false },
        }))
      })</script>
    <script nonce="Bnsmr6JE">(function () {
        var n = now_inl()
        requireLazy(['__bigPipe'], function (bigPipe) {bigPipe.beforePageletArrive('first_response', n)})
      })()</script>
    <script nonce="Bnsmr6JE">requireLazy(['__bigPipe'], (function (bigPipe) {
        bigPipe.onPageletArrive({
          displayResources: ['3OVhK5M', '+0yl4XE', 'Z45zEmb', 'jmUWq5N', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'iKnZGfK', 'P/mr5VE'],
          id: 'first_response',
          phase: 0,
          last_in_phase: true,
          tti_phase: 0,
          all_phases: [63],
          hsrp: { hblp: { sr_revision: 1004457543, consistency: { rev: 1004457543 } } },
          allResources: ['94OOneD', 'e0W9dMY', 'uRFwY3e', 'YFC1f+b', 'hdBGvvz', 'ufZK/E/', 'PKf9GYZ', '3ESKnbe', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'sFOXIKj', '3OVhK5M', '+0yl4XE', 'Z45zEmb', 'jmUWq5N', 'iKnZGfK', 'FKLXJfE', 'CQMqyvQ', 'zPLgIGT', 'P/mr5VE', 'rxHxG1z', 'acm/4bj', 'VNFIl3N'],
        })
      }))</script>
    <script>requireLazy(['__bigPipe'], function (bigPipe) {bigPipe.setPageID('7012472389494302168-0')})
      CavalryLogger.setPageID('7012472389494302168-0')</script>
    <script nonce="Bnsmr6JE">(function () {
        var n = now_inl()
        requireLazy(['__bigPipe'], function (bigPipe) {bigPipe.beforePageletArrive('last_response', n)})
      })()</script>
    <script nonce="Bnsmr6JE">requireLazy(['__bigPipe'], (function (bigPipe) {
        bigPipe.onPageletArrive({
          displayResources: ['ySf8cYD'],
          id: 'last_response',
          phase: 63,
          last_in_phase: true,
          the_end: true,
          jsmods: {
            define: [['UACMConfig', [], {
              ffver: 43627,
              ffid1: 'AcHdaiyu--PY0jpeZnZtog_6Su6KcrwGpHJVq93YhTGarCpOVRxiHusbDhe8YCLKptw',
              ffid2: 'AcGKAwZpgNvmDKovFp49fK1UoKaI1lqZuzSmShr448UKASlIGOy0In7I7YYWeaUdgWU',
              ffid3: 'AcF5Ldt-d0dtnmcsU09OQPWCLZ3IxjrTlE5ov2sPKbhFNtiKVT7luQ0WnBeUc_7vSERhvZ6W4Rgs59kK90QJAQSZ',
              ffid4: 'AcEfTnyneEf4BqIJzqDnv5WAbN_o5wBHmIHUktWGRGR0-jv4gFvf8dvRt9b72Owum1c',
            }, 308], ['TimeSliceInteractionSV', [], {
              on_demand_reference_counting: true,
              on_demand_profiling_counters: true,
              default_rate: 1000,
              lite_default_rate: 100,
              interaction_to_lite_coinflip: {
                ADS_INTERFACES_INTERACTION: 0,
                ads_perf_scenario: 0,
                ads_wait_time: 0,
                Event: 1,
              },
              interaction_to_coinflip: {
                ADS_INTERFACES_INTERACTION: 1,
                ads_perf_scenario: 1,
                ads_wait_time: 1,
                Event: 100,
              },
              enable_heartbeat: true,
              maxBlockMergeDuration: 0,
              maxBlockMergeDistance: 0,
              enable_banzai_stream: true,
              user_timing_coinflip: 50,
              banzai_stream_coinflip: 0,
              compression_enabled: true,
              ref_counting_fix: false,
              ref_counting_cont_fix: false,
              also_record_new_timeslice_format: false,
              force_async_request_tracing_on: false,
            }, 2609], ['WebDriverConfig', [], {
              isTestRunning: false,
              isJestE2ETestRun: false,
              auxiliaryServiceInfo: {},
              testPath: null,
              originHost: null,
            }, 5332], ['cr:1642797', ['BanzaiBase'], { __rc: ['BanzaiBase', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:917439', ['PageTransitionsBlue'], { __rc: ['PageTransitionsBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1108857', [], { __rc: [null, 'Aa0r5erS3QCdozDNIqz4zhQHWFvWE2pvyu0aDIMKBStOcUsFmernS68rVsX8EtPR2m8VF-JOkTmwyi0JAg'] }, -1], ['cr:1269707', [], { __rc: [null, 'Aa3uO0JTbxY4xzd-dQsxsq3nhCO_-dVOzzpH4EhqhvvEcUIRxfFNgtP-sTD2X9qRcV2chcp9k3unnlHjz52NeWc'] }, -1], ['cr:1269708', [], { __rc: [null, 'Aa3uO0JTbxY4xzd-dQsxsq3nhCO_-dVOzzpH4EhqhvvEcUIRxfFNgtP-sTD2X9qRcV2chcp9k3unnlHjz52NeWc'] }, -1], ['cr:1269709', [], { __rc: [null, 'Aa3uO0JTbxY4xzd-dQsxsq3nhCO_-dVOzzpH4EhqhvvEcUIRxfFNgtP-sTD2X9qRcV2chcp9k3unnlHjz52NeWc'] }, -1], ['cr:1294158', ['React.classic'], { __rc: ['React.classic', 'Aa08_bApTbG7NvhEvn6UN8hdrb7pS6yIe2KMT32BW3H66MpR75Q_vJ29bOXNnc7lC6ke8Jg0nvleqmFyoYjcXzUDVmEE'] }, -1], ['cr:1294246', ['ReactDOM.classic'], { __rc: ['ReactDOM.classic', 'Aa08_bApTbG7NvhEvn6UN8hdrb7pS6yIe2KMT32BW3H66MpR75Q_vJ29bOXNnc7lC6ke8Jg0nvleqmFyoYjcXzUDVmEE'] }, -1], ['cr:1069930', [], { __rc: [null, 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1083116', ['XAsyncRequest'], { __rc: ['XAsyncRequest', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1083117', [], { __rc: [null, 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1697455', ['CookieConsentActionHandler'], { __rc: ['CookieConsentActionHandler', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:11202', [], { __rc: [null, 'Aa0r5erS3QCdozDNIqz4zhQHWFvWE2pvyu0aDIMKBStOcUsFmernS68rVsX8EtPR2m8VF-JOkTmwyi0JAg'] }, -1], ['cr:888908', ['warningBlue'], { __rc: ['warningBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:971473', ['LayerHideOnTransition'], { __rc: ['LayerHideOnTransition', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1105154', [], { __rc: [null, 'Aa0r5erS3QCdozDNIqz4zhQHWFvWE2pvyu0aDIMKBStOcUsFmernS68rVsX8EtPR2m8VF-JOkTmwyi0JAg'] }, -1], ['BanzaiConfig', [], {
              MAX_SIZE: 10000,
              MAX_WAIT: 150000,
              MIN_WAIT: null,
              RESTORE_WAIT: 150000,
              blacklist: ['time_spent'],
              disabled: false,
              gks: {
                boosted_pagelikes: true,
                mercury_send_error_logging: true,
                platform_oauth_client_events: true,
                visibility_tracking: true,
                graphexplorer: true,
                sticker_search_ranking: true,
              },
              known_routes: ['artillery_javascript_actions', 'artillery_javascript_trace', 'artillery_logger_data', 'logger', 'falco', 'gk2_exposure', 'js_error_logging', 'loom_trace', 'marauder', 'perfx_custom_logger_endpoint', 'qex', 'require_cond_exposure_logging', 'sri_logger_data'],
              should_drop_unknown_routes: true,
              should_log_unknown_routes: false,
            }, 7], ['PageTransitionsConfig', [], { reloadOnBootloadError: true }, 1067], ['CoreWarningGK', [], { forceWarning: false }, 725], ['cr:692209', ['cancelIdleCallbackBlue'], { __rc: ['cancelIdleCallbackBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1292365', ['React-prod.classic'], { __rc: ['React-prod.classic', 'Aa0r5erS3QCdozDNIqz4zhQHWFvWE2pvyu0aDIMKBStOcUsFmernS68rVsX8EtPR2m8VF-JOkTmwyi0JAg'] }, -1], ['cr:1344485', ['ReactDOM.classic.prod-or-profiling'], { __rc: ['ReactDOM.classic.prod-or-profiling', 'Aa0r5erS3QCdozDNIqz4zhQHWFvWE2pvyu0aDIMKBStOcUsFmernS68rVsX8EtPR2m8VF-JOkTmwyi0JAg'] }, -1], ['cr:983844', [], { __rc: [null, 'Aa0r5erS3QCdozDNIqz4zhQHWFvWE2pvyu0aDIMKBStOcUsFmernS68rVsX8EtPR2m8VF-JOkTmwyi0JAg'] }, -1], ['cr:1344486', ['ReactDOM.classic.prod'], { __rc: ['ReactDOM.classic.prod', 'Aa2LCc-CIQywHnSC5icIXTALqAgEtnS24rN7K08RTkSF4b0hQG23BH1-oYkQnf_qQKF4gCpsvYlFZw_sUWKO6vuLkZD2FmQ_1A'] }, -1], ['cr:1344487', ['ReactDOM-prod.classic'], { __rc: ['ReactDOM-prod.classic', 'Aa26gqNqYtyZ5CmjlvY_FFTZq_Kbtpky6WijhKdkHajvV961YmRRbURKpaKUO_e6-eLPxL1VkDXiX7XlnPOVjAouddGL5QS-_TgdrJir'] }, -1], ['cr:1353359', ['EventListenerImplForBlue'], { __rc: ['EventListenerImplForBlue', 'Aa2Kh4nsOLrzORSLn97fCOmRnZU7UyRPWIa76dswtGAhOT5hkXEvMK_HEYnyPyl8tQ4h0YL-sdBVIypv2cIou-nmoOq3xh1yYA'] }, -1], ['KillabyteProfilerConfig', [], {
              htmlProfilerModule: null,
              profilerModule: null,
              depTypes: { BL: 'bl', NON_BL: 'non-bl' },
            }, 1145], ['QuicklingConfig', [], {
              version: '1004457543;0;',
              sessionLength: 30,
              inactivePageRegex: '^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)',
              badRequestKeys: ['nonce', 'access_token', 'oauth_token', 'xs', 'checkpoint_data', 'code'],
              logRefreshOverhead: false,
            }, 60], ['TrackingConfig', [], { domain: 'https://pixel.facebook.com' }, 325], ['WebDevicePerfInfoData', [], {
              needsFullUpdate: true,
              needsPartialUpdate: false,
              shouldLogResourcePerf: false,
            }, 3977], ['BrowserPaymentHandlerConfig', [], { enabled: false }, 3904], ['TimeSpentConfig', [], {
              '0_delay': 0,
              '0_timeout': 8,
              delay: 1000,
              timeout: 64,
            }, 142], ['cr:844180', ['TimeSpentImmediateActiveSecondsLoggerBlue'], { __rc: ['TimeSpentImmediateActiveSecondsLoggerBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1187159', ['BlueCompatBroker'], { __rc: ['BlueCompatBroker', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['cr:1634616', ['UserActivityBlue'], { __rc: ['UserActivityBlue', 'Aa2ayq5qmAcJpvqQHZ7cqk3D8Qe0hK0za93ezl-mijuxMxTA_weyxMpDhFpmihF0Q5E0T-bVzQFYj9xQRL2mOa3FOnM'] }, -1], ['ImmediateActiveSecondsConfig', [], { sampling_rate: 0 }, 423]],
            require: [['BDClientSignalCollectionTrigger', 'startSignalCollection', [], [{
              sc: '{"t":1618437631,"c":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30009,838801],[30010,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30019,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30100,541591],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}',
              fds: 60,
              fda: 60,
              i: 60,
              sbs: 1,
              dbs: 100,
              bbs: 100,
              hbi: 60,
              rt: 262144,
              hbcbc: 2,
              hbvbc: 0,
              hbbi: 30,
              sid: -1,
              hbv: '8535304012462875681',
            }]], ['CavalryLoggerImpl', 'startInstrumentation', [], []], ['NavigationMetrics', 'setPage', [], [{
              page: 'XIndexReduxController',
              page_type: 'normal',
              page_uri: 'https://fr-fr.facebook.com/',
              serverLID: '7012472389494302168-0',
            }]], ['FalcoLoggerTransports', 'attach', [], []], ['Chromedome', 'start', [], [{}]], ['DimensionTracking'], ['ClickRefLogger'], ['DetectBrokenProxyCache', 'run', [], [0, 'c_user']], ['NavigationClickPointHandler'], ['WebDevicePerfInfoLogging', 'doLog', [], []], ['Artillery', 'disable', [], []], ['ScriptPathLogger', 'startLogging', [], []], ['TimeSpentBitArrayLogger', 'init', [], []], ['RequireDeferredReference', 'unblock', [], [['VisualCompletionGating'], 'sd']], ['RequireDeferredReference', 'unblock', [], [['VisualCompletionGating'], 'css']]],
          },
          hsrp: {
            hsdp: {
              clpData: {
                '1743095': { r: 1, s: 1 },
                '1871697': { r: 1, s: 1 },
                '1829319': { r: 1 },
                '1829320': { r: 1 },
                '1843988': { r: 1 },
              }, gkxData: { '1652843': { result: false, hash: 'AT6uh9NWRY4QEQoY4Ow' } }, qexData: { '715': { r: null } },
            },
            hblp: {
              sr_revision: 1004457543,
              consistency: { rev: 1004457543 },
              rsrcMap: {
                '07F+uI8': {
                  type: 'js',
                  src: 'https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/izEaetvGXuA.js?_nc_x=Ij3Wp8lg5Kz',
                },
                FEt5GzN: {
                  type: 'js',
                  src: 'https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz',
                },
              },
              compMap: {
                TransportSelectingClientSingleton: {
                  r: ['bKu1uaO', 'ySf8cYD', '/1fN/Bb'],
                  rds: {
                    m: ['ContextualConfig', 'BladeRunnerClient', 'DGWRequestStreamClient', 'MqttLongPollingRunner', 'BanzaiScuba_DEPRECATED'],
                    r: ['7ESUDWE', 'o4872U0', 'bme4Lag', 'PKf9GYZ', 'e0W9dMY', '3ESKnbe', 'KxFzGxH', 'O6fdJCG', 'acm/4bj'],
                  },
                  be: 1,
                }, RequestStreamCommonRequestStreamCommonTypes: { r: ['bKu1uaO'], be: 1 },
              },
            },
          },
          allResources: ['07F+uI8', 'FEt5GzN', 'e0W9dMY', 'Qrpaegl', 'bme4Lag', 'O6fdJCG', 'KxFzGxH', 'hdBGvvz', 'PKf9GYZ', 'sFOXIKj', 'YFC1f+b', 'ySf8cYD'],
          onload: ['CavalryLogger.getInstance("7012472389494302168-0").setTTIEvent("t_domcontent");'],
          onafterload: ['CavalryLogger.getInstance("7012472389494302168-0").collectBrowserTiming(window)', 'window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp("t_paint");', 'if (window.ExitTime){CavalryLogger.getInstance("7012472389494302168-0").setValue("t_exit", window.ExitTime);};'],
        })
      }))</script>
</body>
</html>
