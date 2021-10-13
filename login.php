<!DOCTYPE html>
<html lang="fr" id="facebook" class="no_js">
<head>
    <meta charset="utf-8"/>
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer"/>
    <script nonce="3PFf9U8N">window._cstart = +new Date()</script>
    <script nonce="3PFf9U8N">function envFlush (a)
      {
        function b (b) {for (var c in a) b[c] = a[c]}
        window.requireLazy ? window.requireLazy(['Env'], b) : (window.Env = window.Env || {}, b(window.Env))
      }
      envFlush({
        'ajaxpipe_token': 'AXjLPZYSnnmD94JgpPs',
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
        'compat_iframe_token': 'AQ44BdRSfKM-NM91deY',
        'isCQuick': false,
      })</script>
    <style nonce="3PFf9U8N"></style>
    <script nonce="3PFf9U8N">__DEV__ = 0
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
        <meta http-equiv="refresh" content="0; URL=/login.php?_fb_noscript=1"/>
    </noscript>
    <link rel="manifest" href="/data/manifest/" crossorigin="use-credentials"/>
    <title id="pageTitle">Se connecter à Facebook</title>
    <meta name="description"
          content="Connectez-vous &#xe0; Facebook pour commencer &#xe0; partager et communiquer avec vos amis, votre famille et les personnes que vous connaissez."/>
    <meta property="og:site_name" content="Facebook"/>
    <meta property="og:url" content="https://fr-fr.facebook.com/login.php"/>
    <meta property="og:locale" content="fr_FR"/>
    <link rel="canonical" href="https://fr-fr.facebook.com/login/web/"/>
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/l/0,cross/CJYvcxnbDL_.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="URcsMgh" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yX/l/0,cross/6pVNvv4BSRX.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="OBNc2BT" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/l/0,cross/UE1wdg7_Vsg.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="cq9toiK" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yK/l/0,cross/JQKojJIIKDw.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="clMFNvf" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/l/0,cross/KQN9gRJBI8O.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="T+M/J5P" crossorigin="anonymous"/>
    <link type="text/css" rel="stylesheet"
          href="https://static.xx.fbcdn.net/rsrc.php/v3/yt/l/0,cross/okWGGyYvRYX.css?_nc_x=Ij3Wp8lg5Kz"
          data-bootloader-hash="+X8x83b" crossorigin="anonymous"/>
    <script nonce="3PFf9U8N">requireLazy(['HasteSupportData'], function (m) {
        m.handle({
          'clpData': {
            '1814852': { 'r': 1 },
            '1949898': { 'r': 1 },
            '1848815': { 'r': 10000, 's': 1 },
            '1744178': { 'r': 1, 's': 1 },
          },
          'gkxData': {
            '676837': { 'result': false, 'hash': 'AT4N8wBZA8ctCdHwHT8' },
            '676920': { 'result': true, 'hash': 'AT497IX4gOFG8gZetEg' },
            '708253': { 'result': false, 'hash': 'AT5n4hBL3YTMnQWtmxE' },
            '996940': { 'result': false, 'hash': 'AT7opYuEGy3sjG1afs0' },
            '1073500': { 'result': true, 'hash': 'AT7aJmfnqWyioxOOlfc' },
            '1224637': { 'result': false, 'hash': 'AT7JRluWxuwDm3XzhUk' },
            '1263340': { 'result': false, 'hash': 'AT5bwizWgDaFQudmpfk' },
            '1857581': { 'result': false, 'hash': 'AT5yTxGMp6le0PAt6Cw' },
            '3752': { 'result': false, 'hash': 'AT6eS5UTkkMp_xbPiGw' },
            '3831': { 'result': false, 'hash': 'AT4W23lQ0XxAZniMDGE' },
            '4075': { 'result': false, 'hash': 'AT4_ZQi0sTjSt-Rxm5s' },
            '676838': { 'result': false, 'hash': 'AT6nN1ehT9yq-2q6KTg' },
            '1217157': { 'result': false, 'hash': 'AT6B7YmllOsArnK6wrM' },
            '1554827': { 'result': false, 'hash': 'AT7zueGLhGo0cT5xTv8' },
            '1738486': { 'result': false, 'hash': 'AT4cX37oQco6DwhUWVM' },
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
          }, 270], ['DTSGInitialData', [], {}, 258], ['ISB', [], {}, 330], ['LSD', [], { 'token': 'AVoCr2j89Gg' }, 323], ['ServerNonce', [], { 'ServerNonce': '3gRDZ7wvwatGlQ2V01FCJN' }, 141], ['SiteData', [], {
            'server_revision': 1004459420,
            'client_revision': 1004458814,
            'tier': '',
            'push_phase': 'C3',
            'pkg_cohort': 'BP:DEFAULT',
            'haste_session': '18897.BP:DEFAULT.2.0.0.0.',
            'pr': 1,
            'haste_site': 'www',
            'be_one_ahead': false,
            'ir_on': true,
            'is_rtl': false,
            'is_comet': false,
            'is_experimental_tier': false,
            'is_jit_warmed_up': false,
            'hsi': '7012688135346302334-0',
            'semr_host_bucket': '3',
            'bl_hash_version': 2,
            'skip_rd_bl': true,
            'comet_env': 0,
            'spin': 4,
            '__spin_r': 1004458814,
            '__spin_b': 'trunk',
            '__spin_t': 1632768692,
            'vip': '2a03:2880:f05b:12:face:b00c:0:2',
          }, 317], ['SprinkleConfig', [], {
            'param_name': 'jazoest',
            'version': 2,
            'should_randomize': false,
          }, 2111], ['UserAgentData', [], {
            'browserArchitecture': '64',
            'browserFullVersion': '68.0',
            'browserMinorVersion': 0,
            'browserName': 'Firefox',
            'browserVersion': 68,
            'deviceName': 'Unknown',
            'engineName': 'Gecko',
            'engineVersion': '68.0',
            'platformArchitecture': '64',
            'platformName': 'Windows',
            'platformVersion': '8',
            'platformFullVersion': '8',
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
            'deferCookies': true,
            'initialConsent': { '__set': [] },
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
          }, 54], ['SessionNameConfig', [], { 'seed': '2Svk' }, 757], ['ZeroCategoryHeader', [], {}, 1127], ['ZeroRewriteRules', [], {
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
            'serverTime': 1632768692306,
            'timeOfRequestStart': 1632768692280.5,
            'timeOfResponseStart': 1632768692280.5,
          }, 5943], ['AnalyticsCoreData', [], {
            'device_id': '$^|AcZc1K8klY2ZrCFWeM0adlzbBe4WKJOYIp-TjSMVj8tQ-iqGte052x86i4v3q1Uw4tHuypzplY4gzmpu6V41LgY4dHHPWDvzYvhZRovObQghmQXbA4Zsik7jOxnka-SjCSd4sFFJ87x0YY2B0pzudw4rds9-ACA|fd.AcZ9dgH5KJz_gIOFQ3VRVcazFxN4Tso6tt7NQSIJXe1-swicoc3m3s1sm0DgCnjYWz-XxrThI-3vj8EzbtGzGPuc',
            'app_id': '256281040558',
            'enable_bladerunner': false,
            'enable_ack': true,
            'push_phase': 'C3',
            'enable_observer': false,
          }, 5237], ['cr:696703', [], { '__rc': [null, 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:708886', ['EventProfilerImpl'], { '__rc': ['EventProfilerImpl', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:717822', ['TimeSliceImpl'], { '__rc': ['TimeSliceImpl', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:806696', ['clearTimeoutBlue'], { '__rc': ['clearTimeoutBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:807042', ['setTimeoutBlue'], { '__rc': ['setTimeoutBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:896462', ['setIntervalAcrossTransitionsBlue'], { '__rc': ['setIntervalAcrossTransitionsBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:986633', ['setTimeoutAcrossTransitionsBlue'], { '__rc': ['setTimeoutAcrossTransitionsBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1003267', ['clearIntervalBlue'], { '__rc': ['clearIntervalBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1183579', ['InlineFbtResultImpl'], { '__rc': ['InlineFbtResultImpl', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:925100', ['RunBlue'], { '__rc': ['RunBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:729414', ['VisualCompletion'], { '__rc': ['VisualCompletion', 'Aa3us2Q8oaMT6FUECaQ1ItQ74KqWKO_F48vhgqOaEi0LAjjuYVvBQqQO7VL41v9zO1hk-9VAvnWgzmAQbQLlxVlG'] }, -1], ['cr:1094907', [], { '__rc': [null, 'Aa3LxZ8f_DGrJYDKGEi5RjDNwN24Fd3bV6XrLom32ZOxlY_8OzWV7DQoB3EaUgUZSEQFv5_4wFZ266vIVH5YKGE'] }, -1], ['EventConfig', [], {
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
            'page_id': 'Pr03wdw1n8i8m9',
            'transition_id': 0,
            'version': 6,
          }, 5888], ['cr:1367102', [], { '__rc': [null, 'Aa3cei0W40KS091U-uoFKGramBYRpigfLVkpXLY_0PbPSn_OScxxAyYHT8FqJwENzGA7UeiaSTJGdVldTfZ2W3HL'] }, -1], ['cr:1984081', [], { '__rc': [null, 'Aa0KTzjrB7QQNEUpPh2akPh8E7zcQ98CAAHNol_lEWfAT-LXQpUNsyELED3OA2qKfVyYliGgJFutBsKpRJ8caBm5BfBV'] }, -1]],
          'require': [['markJSEnabled'], ['lowerDomain'], ['URLFragmentPrelude'], ['Primer'], ['BigPipe'], ['Bootloader'], ['TimeSlice'], ['AsyncRequest'], ['BanzaiScuba_DEPRECATED'], ['VisualCompletionGating'], ['FbtLogging'], ['IntlQtEventFalcoEvent'], ['RequireDeferredReference', 'unblock', [], [['AsyncRequest', 'BanzaiScuba_DEPRECATED', 'VisualCompletionGating', 'FbtLogging', 'IntlQtEventFalcoEvent'], 'sd']], ['RequireDeferredReference', 'unblock', [], [['AsyncRequest', 'BanzaiScuba_DEPRECATED', 'VisualCompletionGating', 'FbtLogging', 'IntlQtEventFalcoEvent'], 'css']]],
        })
      })</script>
</head>
<body
  class="_39il _97vt _97vz _97v- _97v_ _97w2 _97w0 _9ax- _9ax_ _9ay1 UIPage_LoggedOut hasBanner _-kb _605a b_c3pyn-ahh gecko win x1 Locale_fr_FR"
  dir="ltr">
    <script type="text/javascript"
            nonce="3PFf9U8N">requireLazy(['bootstrapWebSession'], function (j) {j(1632768692)})</script>
    <div class="_li" id="u_0_2_pl">
        <div class="_3_s0 _1toe _3_s1 _3_s1 uiBoxGray noborder" data-testid="ax-navigation-menubar" id="u_0_3_x9">
            <div class="_608m">
                <div class="clearfix _ikh _tb6">
                    <div class="_4bl7"><span class="mrm _3bcv _50f3">Aller vers</span></div>
                    <div class="_4bl9 _3bcp">
                        <div class="_6a _608n" aria-label="Assistant de navigation" role="menubar" id="u_0_4_ai">
                            <div class="_6a uiPopover" id="u_0_5_ia"><a role="button"
                                                                        class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy"
                                                                        href="#" style="max-width:200px;"
                                                                        aria-haspopup="true" aria-expanded="false"
                                                                        rel="toggle" id="u_0_6_/A"><span class="_55pe">Sections
                                        de cette Page</span><span class="_4o_3 _3-99"><i
                                          class="img sp_5iYm-45_v_9 sx_ba1064"></i></span></a></div>
                            <div class="_6a _3bcs"></div>
                            <div class="_6a mrm uiPopover" id="u_0_7_FU"><a role="button"
                                                                            class="_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy"
                                                                            href="#" style="max-width:200px;"
                                                                            aria-haspopup="true" tabindex="-1"
                                                                            aria-expanded="false" rel="toggle"
                                                                            id="u_0_8_hp"><span class="_55pe">Aide
                                        accessibilité</span><span class="_4o_3 _3-99"><i
                                          class="img sp_5iYm-45_v_9 sx_f83ac6"></i></span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="globalContainer" class="uiContextualLayerParent">
            <div class="fb_content clearfix " id="content" role="main">
                <div class="_4-u5 _30ny">
                    <div class="_97vy"><img class="_97vu img"
                                            src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                                            alt="Facebook"/></div>
                    <span class="muffin_tracking_pixel_start"></span><img class="tracking_pixel"/><span
                      class="muffin_tracking_pixel_end"></span>
                    <div class="_4-u2 _1w1t _4-u8 _52jv">
                        <div class="_xku" id="header_block"><span class="_97w1 _50f6">
                                <div class="_9axz">Se connecter à Facebook</div>
                            </span></div>
                        <div class="login_form_container">
                            <form id="login_form" action="/login/identify/login.php/?login_attempt=1&amp;lwv=100"
                                  method="post" onsubmit=""><input type="hidden" name="jazoest" value="2886"
                                                                   autocomplete="off"/><input type="hidden" name="lsd"
                                                                                              value="AVoCr2j89Gg"
                                                                                              autocomplete="off"/><input
                                  type="hidden" autocomplete="off" id="error_box"/>
                                <div id="loginform"><input type="hidden" autocomplete="off" id="display" name="display"
                                                           value=""/><input type="hidden" autocomplete="off"
                                                                            id="enable_profile_selector"
                                                                            name="enable_profile_selector"
                                                                            value=""/><input type="hidden"
                                                                                             autocomplete="off"
                                                                                             id="isprivate"
                                                                                             name="isprivate" value=""/><input
                                      type="hidden" autocomplete="off" id="legacy_return" name="legacy_return"
                                      value="0"/><input type="hidden" autocomplete="off" id="profile_selector_ids"
                                                        name="profile_selector_ids" value=""/><input type="hidden"
                                                                                                     autocomplete="off"
                                                                                                     id="return_session"
                                                                                                     name="return_session"
                                                                                                     value=""/><input
                                      type="hidden" autocomplete="off" id="skip_api_login" name="skip_api_login"
                                      value=""/><input type="hidden" autocomplete="off" id="signed_next"
                                                       name="signed_next" value=""/><input type="hidden"
                                                                                           autocomplete="off"
                                                                                           id="trynum" name="trynum"
                                                                                           value="1"/><input
                                      type="hidden" autocomplete="off" name="timezone" value="" id="u_0_9_pP"/><input
                                      type="hidden" autocomplete="off" name="lgndim" value="" id="u_0_a_Pj"/><input
                                      type="hidden" name="lgnrnd" value="115132_0V3x"/><input type="hidden" id="lgnjs"
                                                                                              name="lgnjs" value="n"/>
                                    <div class="clearfix _5466 _44mg" id="email_container">
                                        <input type="text"
                                               class="inputtext _55r1 inputtext _1kbt inputtext _1kbt"
                                               name="email"
                                               id="email"
                                               tabindex="0"
                                               placeholder="Adresse e-mail ou num&#xe9;ro de t&#xe9;l."
                                               value="" autofocus="1"
                                               autocomplete="username"
                                               aria-label="Adresse e-mail ou num&#xe9;ro de t&#xe9;l."/>
                                    </div>
                                    <div class="clearfix _5466 _44mg" id="email_container">
                                        <input
                                          type="password" class="inputtext _55r1 inputtext _1kbt inputtext _1kbt"
                                          name="pass"
                                          id="pass" data-testid="royal_pass" placeholder="Mot de passe"
                                          aria-label="Mot de passe"/>
                                    </div>
                                    <div class="_xkt">
                                        <button value="1" class="_42ft _4jy0 _52e0 _4jy6 _4jy1 selected _51sy"
                                                id="loginbutton" name="login" tabindex="0" type="submit">Se connecter
                                        </button>
                                    </div>
                                    <div class="_xkv fsm fwn fcg" id="login_link"><a
                                          href="/login/identify/reset.php?ctx=recover&ars=facebook_login&from_login_screen=0"
                                          class="_97w4" target="">Informations de compte oubliées ?</a><span
                                          role="presentation" aria-hidden="true"> · </span><a
                                          href="/register/register.php?locale=fr_FR&display=page" rel="nofollow"
                                          class="_97w5">S’inscrire sur Facebook</a></div>
                                </div>
                                <input type="hidden" autocomplete="off" id="prefill_contact_point"
                                       name="prefill_contact_point" value=""/><input type="hidden" autocomplete="off"
                                                                                     id="prefill_source"
                                                                                     name="prefill_source"/><input
                                  type="hidden" autocomplete="off" id="prefill_type" name="prefill_type"/><input
                                  type="hidden" autocomplete="off" id="first_prefill_source"
                                  name="first_prefill_source"/><input type="hidden" autocomplete="off"
                                                                      id="first_prefill_type"
                                                                      name="first_prefill_type"/><input type="hidden"
                                                                                                        autocomplete="off"
                                                                                                        id="had_cp_prefilled"
                                                                                                        name="had_cp_prefilled"
                                                                                                        value="false"/><input
                                  type="hidden" autocomplete="off" id="had_password_prefilled"
                                  name="had_password_prefilled" value="false"/><input type="hidden" autocomplete="off"
                                                                                      name="ab_test_data" value=""/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="_95ke _8opy">
                    <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                        <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                            <li>Français (France)</li>
                            <li><a class="_sv4" dir="ltr" href="https://de-de.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;fr_FR&quot;, &quot;https:\/\/de-de.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 0); return false;"
                                   title="German">Deutsch</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://www.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;en_US&quot;, &quot;fr_FR&quot;, &quot;https:\/\/www.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 1); return false;"
                                   title="English (US)">English (US)</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://it-it.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;fr_FR&quot;, &quot;https:\/\/it-it.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 2); return false;"
                                   title="Italian">Italiano</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://pt-pt.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_PT&quot;, &quot;fr_FR&quot;, &quot;https:\/\/pt-pt.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 3); return false;"
                                   title="Portuguese (Portugal)">Português (Portugal)</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://sq-al.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;sq_AL&quot;, &quot;fr_FR&quot;, &quot;https:\/\/sq-al.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 4); return false;"
                                   title="Albanian">Shqip</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://es-la.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;fr_FR&quot;, &quot;https:\/\/es-la.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 5); return false;"
                                   title="Spanish">Español</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://tr-tr.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;tr_TR&quot;, &quot;fr_FR&quot;, &quot;https:\/\/tr-tr.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 6); return false;"
                                   title="Turkish">Türkçe</a></li>
                            <li><a class="_sv4" dir="rtl" href="https://ar-ar.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ar_AR&quot;, &quot;fr_FR&quot;, &quot;https:\/\/ar-ar.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 7); return false;"
                                   title="Arabic">العربية</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://hi-in.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;hi_IN&quot;, &quot;fr_FR&quot;, &quot;https:\/\/hi-in.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 8); return false;"
                                   title="Hindi">हिन्दी</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://zh-cn.facebook.com/login.php"
                                   onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;zh_CN&quot;, &quot;fr_FR&quot;, &quot;https:\/\/zh-cn.facebook.com\/login.php&quot;, &quot;www_list_selector&quot;, 9); return false;"
                                   title="Simplified Chinese (China)">中文(简体)</a></li>
                            <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog"
                                   ajaxify="/settings/language/language/?uri=https%3A%2F%2Fzh-cn.facebook.com%2Flogin.php&amp;source=www_list_selector_more"
                                   href="#" title="Voir plus de langues"><i
                                      class="img sp_5iYm-45_v_9 sx_55e38d"></i></a></li>
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
                                      href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT2Egf5tbgdH20cLoLzBIddRxzuKsA6kPM4Td0SEJVIHHRS16UIUoe4UCMsxzvAMlkVO6j9rowjhzMlJGXljClDBQ3Eja5TUMVuURY4-4VLACevZR-R7XIIpaaRQY7ogmftpEjPT7-zj9gwONZpdlNExf3k4RkQr3f5E"
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
                                          class="img sp_5iYm-45_v_9 sx_0dfd7e"></i></a></li>
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
          'clpData': { '1746397': { 'r': 1, 's': 1 }, '1838142': { 'r': 1, 's': 1 } },
          'gkxData': {
            '4166': { 'result': false, 'hash': 'AT7yrb5QuQ92736u3yY' },
            '677762': { 'result': false, 'hash': 'AT6e9MvRyXpacwOYyM0' },
            '1243461': { 'result': false, 'hash': 'AT7fIw7JO3EJySTccpI' },
            '176': { 'result': true, 'hash': 'AT4NwIszPuVVxWDOl4A' },
            '1167394': { 'result': false, 'hash': 'AT7BpN-tlUPwbIIFIj8' },
            '1908135': { 'result': false, 'hash': 'AT6miGypJl3m2Aq4v5E' },
            '3959': { 'result': true, 'hash': 'AT5An4B4pPVNHiK80sM' },
            '819236': { 'result': false, 'hash': 'AT66vW86d2uJ-kXPSVI' },
            '12': { 'result': false, 'hash': 'AT7MdxfOMhMQYcz0fCk' },
            '1646': { 'result': false, 'hash': 'AT4QD7x1GFNYajJZxyw' },
            '729631': { 'result': false, 'hash': 'AT7b0tj8AHWG5lTFu6M' },
            '1281505': { 'result': false, 'hash': 'AT4PHZM9gFoypCjQNFI' },
            '1291023': { 'result': false, 'hash': 'AT519LseIG1nwq3oeMI' },
            '1294182': { 'result': false, 'hash': 'AT4vd6mwrtAJouEJSVQ' },
            '1399218': { 'result': true, 'hash': 'AT6guCW1eyIkOV1EREo' },
            '1401060': { 'result': true, 'hash': 'AT5aetN5Gb3reIXV6ro' },
            '1485055': { 'result': true, 'hash': 'AT5lkGxmhfrVKlcnQbI' },
            '1596063': { 'result': false, 'hash': 'AT7JHuDWtaOqRuBUiXM' },
            '1597642': { 'result': true, 'hash': 'AT78G4fDXhlnMl7oFP8' },
            '1647260': { 'result': false, 'hash': 'AT4WdkrQSGE5dIsEvlk' },
            '1695831': { 'result': false, 'hash': 'AT7RA6TJmDFGF-D6mv4' },
            '1722014': { 'result': false, 'hash': 'AT6_M5gpc6RLrHjcIHM' },
            '1742795': { 'result': false, 'hash': 'AT6dbnY5JZm_bTINY2o' },
            '1778302': { 'result': false, 'hash': 'AT65fisZhmc2X92EqsU' },
            '1840809': { 'result': false, 'hash': 'AT5nYctoTsr7alRisUc' },
            '1848749': { 'result': false, 'hash': 'AT5GsH9Kb-3W-taZJag' },
            '1906871': { 'result': false, 'hash': 'AT6dIBiVv9bUDXlmFUU' },
            '1985945': { 'result': true, 'hash': 'AT66Oo5lY__5wUTp_nM' },
            '1099893': { 'result': false, 'hash': 'AT5kly2LSZV_DKGRm6c' },
          },
          'qexData': {
            '1981829': { 'r': null },
            '623': { 'r': null },
            '671': { 'r': null },
            '706': { 'r': null },
            '707': { 'r': null },
          },
          'qplData': { '891': { 'r': 1 } },
        })
      })
      requireLazy(['Bootloader'], function (m) {
        m.handlePayload({
          'sr_revision': 1004458814, 'consistency': { 'rev': 1004458814 }, 'rsrcMap': {
            'MtnSIhn': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/LvpJogDKEV-.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'PKf9GYZ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/ISOOMzX-W9g.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'e0W9dMY': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTOp4\/yO\/l\/fr_FR\/L1d008k8MHH.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ySf8cYD': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yr\/r\/BNzLtjA89q3.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'O6fdJCG': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/dATna7NWzvc.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'KxFzGxH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/r\/XpFprvKSai6.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ix+gYi1': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ix924\/yA\/l\/fr_FR\/wey-VXyEpgl.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'TUxV68S': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/AEurEMwqHIo.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'acm\/4bj': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibup4\/yD\/l\/fr_FR\/GIiNsGUFjHu.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'RpxWbM9': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/fvmSzDrhmwU.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'd6TmhbN': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/Tt3ravOuaqE.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '2\/maQ\/Q': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/R9lc5DaDrGJ.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'w3Wk9lz': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4Jo4\/yd\/l\/fr_FR\/f0h0OfDnw6R.js?_nc_x=Ij3Wp8lg5Kz',
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
            '\/8WbbUa': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/bbFAPOpx4zt.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '3ESKnbe': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/r\/6LZHL05r2vJ.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'VNFIl3N': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/r\/bnTAMrupJic.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ltr6kwu': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/30MwAtuDo-F.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'tW++MDr': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i6Zu4\/yd\/l\/fr_FR\/5QCp186_yVx.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '7haSbyr': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iq0-4\/ym\/l\/fr_FR\/b3rU6SKA5X7.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '7ESUDWE': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/P0xVWxaibxc.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Sepgo6B': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/XDNv-aAn3yu.js?_nc_x=Ij3Wp8lg5Kz',
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
            'RF7g73D': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3io-a4\/yR\/l\/fr_FR\/0s9JiJ2E3qO.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'HPvw0kq': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/yx\/l\/fr_FR\/rUgaECHSqh3.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'o1uOS7E': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ijTO4\/yh\/l\/fr_FR\/JEHdeXhPKNK.js?_nc_x=Ij3Wp8lg5Kz',
            },
            't4H9DP7': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iT_x4\/ya\/l\/fr_FR\/_geGjQM1C82.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Kc09Wtd': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/l\/0,cross\/svNhB5C7XR2.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'vDALNpG': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itIM4\/y5\/l\/fr_FR\/2VJHVLp3esa.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'fIGkp+A': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/0kmwFiGSiiO.js?_nc_x=Ij3Wp8lg5Kz',
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
            '\/zbxQ3F': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/XaJzqdSJ5Ez.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'MUzrf5t': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikQ04\/y1\/l\/fr_FR\/7zHk8cqSBV8.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'S+SXpNg': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFZQ4\/yP\/l\/fr_FR\/LiaIu9LgTSH.js?_nc_x=Ij3Wp8lg5Kz',
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
            'AyEW6ap': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3icU54\/yR\/l\/fr_FR\/u6Jc5f77MNm.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'XPOg7fi': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yr\/l\/0,cross\/xyKz01wzTmT.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'fI7fIq1': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/r\/A0-Sf4_I9P8.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'D81PK1s': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/l\/0,cross\/JKkV_kvwfdh.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'bKu1uaO': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/HE7DIRDqsi9.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'DC+2e4w': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/r\/au-kZcX43FH.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'rdJmKol': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iYkn4\/y_\/l\/fr_FR\/CnVky0BQMT_.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Mffryiu': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/kPsSRMBTCg_.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'z8yT\/5E': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yl\/r\/cKFUxxJrsam.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'wYnYT4n': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/yl\/l\/fr_FR\/ysHGk4UBJZD.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'FIinMQF': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/x3oRNKcZO5k.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '\/FLguz0': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y9\/l\/0,cross\/bLgNEJ8Nz-x.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'ktI3q4+': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/tN8e-lZIAoa.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'HNJSLBJ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/Pclf-4IFD1I.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'CJB5jIX': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yN\/r\/gDAcjxGsSPh.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'fo+tiSR': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/zQxeFeQkfMX.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'SbUBxQk': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTt-4\/yy\/l\/fr_FR\/IEVbWCsk_vi.js?_nc_x=Ij3Wp8lg5Kz',
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
            '7\/6ITAv': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/nVOsBhNJLeA.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'bG1x\/rg': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i3eJ4\/yh\/l\/fr_FR\/_A1UeG8lOcp.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '7dpGM6m': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/l\/0,cross\/Bur6Uu21Fxj.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'OSlb\/rE': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3inLk4\/yg\/l\/fr_FR\/8V4bi7wcEwc.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'R0IT23T': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/nCT2GoK2I5d.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'NS5+QuY': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/4U8iufLdSU1.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'aHLA98t': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_uz4\/ym\/l\/fr_FR\/cH7a_E2bJYW.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'YFC1f+b': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iI254\/y3\/l\/fr_FR\/Ou0wKR1sTZQ.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'isdlXgl': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/l\/0,cross\/HoLOzL9WlC9.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'b8E7maP': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ipoU4\/yo\/l\/fr_FR\/AP0TArna3vU.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'da0fSo5': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i8dQ4\/yy\/l\/fr_FR\/ODmKH-vjA7I.js?_nc_x=Ij3Wp8lg5Kz',
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
            'BG4NlM1': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/l\/0,cross\/6cJDyCu4KM6.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'p6ocrQ1': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/399Z3u-FUxu.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'DeOdhJS': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/0PC0SAiN7-m.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'q4C1aFa': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ioOl4\/yp\/l\/fr_FR\/SLs-CH5ltt5.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'hMGDL9a': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/r\/6MIjJE9l6bz.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'SwTsWhd': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/l\/0,cross\/KvRIsiothsK.css?_nc_x=Ij3Wp8lg5Kz',
            },
            '6V0Nhye': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/ocLUINiMQ1k.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'hFeShQM': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iek84\/yy\/l\/fr_FR\/EMCsNIAFUwC.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'mXGACHR': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/l\/0,cross\/6NfbLJoC8OV.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'L+7UNOC': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/l\/0,cross\/YCRAnZHJJKl.css?_nc_x=Ij3Wp8lg5Kz',
            },
            '2sU+jOw': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iSwL4\/y0\/l\/fr_FR\/qIU2oUe7mQx.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'KP9vtM2': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_DD4\/y-\/l\/fr_FR\/nunQYd7Ehof.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'amUs4B+': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/l\/0,cross\/oHhOWLFLCQ-.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'ATH9bPv': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iloS4\/yo\/l\/fr_FR\/35GGeae91nx.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'zQYQqNb': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/l\/0,cross\/27zRvjiSvUZ.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'Np2b6mH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/5KuuWuBlLaA.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'oU8\/MN9': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ij7P4\/yy\/l\/fr_FR\/wqBjD3yW45C.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'c0sPj4p': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iuyg4\/yj\/l\/fr_FR\/DF7ogCDoC4B.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'm1pQw1b': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/Nk6Yoi11N-4.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '\/qw6Exm': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ie0v4\/yz\/l\/fr_FR\/5r-fvKsCC-m.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '1EjliHc': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/pFW2_vDLNAg.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '1gIQtPo': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/l\/0,cross\/rlmMgVJfRWE.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'wZ7C2vM': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i_494\/ym\/l\/fr_FR\/42weitvbs3e.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'S6X0eY2': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/l\/0,cross\/oYlkc7Tsdnd.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'A2Znj1B': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iGzs4\/yF\/l\/fr_FR\/Z49Uzz6Npse.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'cnBXKgJ': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/l\/0,cross\/xTTNxfFKDfQ.css?_nc_x=Ij3Wp8lg5Kz',
            },
            '+dmOh\/S': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/l\/0,cross\/OKYuORMoHiD.css?_nc_x=Ij3Wp8lg5Kz',
            },
            '\/t8dtgI': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/vDmZmEHXuDg.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'avghBYZ': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/DV0R6TVxDnB.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'B4jV6ay': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3it3U4\/yt\/l\/fr_FR\/TA0ZkEs1xVl.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'zB\/rRDj': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/l\/0,cross\/MrJoRYIOqgi.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'cl4FKLb': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/l\/0,cross\/2rTeH_-d23f.css?_nc_x=Ij3Wp8lg5Kz',
            },
            'nQ1LPEi': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/3124vtmhcTM.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'f9ky1ix': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iknH4\/yO\/l\/fr_FR\/DFAn5LKfNst.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'Fsrrx\/O': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikX74\/yl\/l\/fr_FR\/Z-9pqhzoObi.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '88vrm\/B': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixy04\/y4\/l\/fr_FR\/AvJwV_TyIJ-.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'exLGtSF': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/r\/z5GDgWJ6ULG.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'YuFdUZF': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ixXC4\/yO\/l\/fr_FR\/uDx_fnsiuS5.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'eEXooSh': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/6jKYdkqGDiX.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'cKXUyua': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNZc4\/y7\/l\/fr_FR\/a5Ich-mBY_N.js?_nc_x=Ij3Wp8lg5Kz',
            },
            '7k\/UUPf': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/vAqi0QCJRZ8.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'N3iHjKv': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yG\/r\/oSSEqQX8VNm.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'o4872U0': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1dc4\/yu\/l\/fr_FR\/PJtG94o8F3A.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'EpV5H+m': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/5e3uFpdcqsn.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'EUuxD6w': {
              'type': 'css',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yT\/l\/0,cross\/pbkUfwK-3bX.css?_nc_x=Ij3Wp8lg5Kz',
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
            'Hpk9Par': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/EopQvEMBt0m.js?_nc_x=Ij3Wp8lg5Kz',
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
            '8ELCBwH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'nchbHvH': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iaJe4\/yn\/l\/fr_FR\/SSLTyjETokS.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'oE4DofT': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'VvVFw8n': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'x1V\/D6b': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/fMC9HSEegBu.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'ycFdVta': {
              'type': 'js',
              'src': 'https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/preQ7R4Ukbb.js?_nc_x=Ij3Wp8lg5Kz',
            },
            'P\/mr5VE': {
              'type': 'css',
              'src': 'data:text\/css; charset=utf-8;base64,I2Jvb3Rsb2FkZXJfUF9tcjVWRXtoZWlnaHQ6NDJweDt9LmJvb3Rsb2FkZXJfUF9tcjVWRXtkaXNwbGF5OmJsb2NrIWltcG9ydGFudDt9',
              'nc': 1,
              'd': 1,
            },
          }, 'compMap': {
            'Dock': {
              'r': ['MtnSIhn', 'T+M\/J5P', 'PKf9GYZ', 'OBNc2BT', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1'],
              'be': 1,
            },
            'WebSpeedInteractionsTypedLogger': {
              'r': ['TUxV68S', 'ySf8cYD', 'acm\/4bj'],
              'rds': { 'm': ['BanzaiScuba_DEPRECATED'] },
              'be': 1,
            },
            'AsyncRequest': {
              'r': ['e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'OBNc2BT'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['ix+gYi1'] },
              'be': 1,
            },
            'DOM': { 'r': ['KxFzGxH', 'OBNc2BT'], 'be': 1 },
            'Form': { 'r': ['KxFzGxH', 'RpxWbM9', 'OBNc2BT'], 'be': 1 },
            'FormSubmit': {
              'r': ['d6TmhbN', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'RpxWbM9', 'OBNc2BT'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED'], 'r': ['ix+gYi1'] },
              'be': 1,
            },
            'Input': { 'r': ['RpxWbM9'], 'be': 1 },
            'Live': { 'r': ['2\/maQ\/Q', 'w3Wk9lz', 'e0W9dMY', 'IfCgv8r', 'ySf8cYD', 'KxFzGxH', 'OBNc2BT'], 'be': 1 },
            'Toggler': {
              'r': ['MtnSIhn', 'T+M\/J5P', 'PKf9GYZ', 'OBNc2BT', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1'],
              'be': 1,
            },
            'Tooltip': {
              'r': ['MtnSIhn', 'PKf9GYZ', 'clMFNvf', 'OBNc2BT', 'HbZmd6x', 'rxHxG1z', 'e0W9dMY', '\/8WbbUa', '3ESKnbe', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1', 'URcsMgh', 'VNFIl3N', 'ltr6kwu', 'RpxWbM9', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent', 'PageTransitions', 'BanzaiScuba_DEPRECATED', 'Animation'] },
              'be': 1,
            },
            'URI': { 'r': [], 'be': 1 },
            'trackReferrer': { 'r': [], 'rds': { 'm': ['BanzaiScuba_DEPRECATED'], 'r': ['ySf8cYD'] }, 'be': 1 },
            'PhotoTagApproval': { 'r': ['tW++MDr', '7haSbyr', 'KxFzGxH', 'OBNc2BT'], 'be': 1 },
            'PhotoSnowlift': {
              'r': ['7ESUDWE', 'MtnSIhn', 'Sepgo6B', 'PMKjrCb', 'Xh\/XUjV', 'QNuV5X\/', 'RF7g73D', 'HPvw0kq', 'o1uOS7E', 't4H9DP7', 'Kc09Wtd', 'vDALNpG', 'T+M\/J5P', 'fIGkp+A', 'zwad0VS', 'PKf9GYZ', 'opLOFUy', 'clMFNvf', 'yooxF7B', 'OBNc2BT', '\/zbxQ3F', 'MUzrf5t', 'S+SXpNg', 'HbZmd6x', 'A5W\/cee', 'dCd\/p2m', 'DQ9JQyJ', 'AyEW6ap', 'XPOg7fi', 'fI7fIq1', 'D81PK1s', 'bKu1uaO', 'DC+2e4w', 'rdJmKol', 'Mffryiu', 'rxHxG1z', 'z8yT\/5E', 'wYnYT4n', 'FIinMQF', '\/FLguz0', 'ktI3q4+', 'HNJSLBJ', 'CJB5jIX', 'e0W9dMY', '\/8WbbUa', 'fo+tiSR', 'SbUBxQk', '\/1fN\/Bb', 'LikKPaE', 'ByiDAD6', 'popcTSQ', 'bme4Lag', '7\/6ITAv', '3ESKnbe', 'bG1x\/rg', 'ltr6kwu', '7dpGM6m', 'OSlb\/rE', 'R0IT23T', 'NS5+QuY', 'ySf8cYD', 'aHLA98t', '7haSbyr', 'O6fdJCG', 'YFC1f+b', 'KxFzGxH', 'isdlXgl', 'b8E7maP', 'ix+gYi1', 'RpxWbM9', 'da0fSo5', 'URcsMgh', 'VNFIl3N', 'acm\/4bj'],
              'rds': {
                'm': ['Animation', 'VisualCompletionGating', 'FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED', 'PageTransitions'],
                'r': ['sFOXIKj'],
              },
              'be': 1,
            },
            'PhotoTagger': {
              'r': ['uXVDgGT', '7ESUDWE', 'MtnSIhn', 'DrE+kHk', 'BG4NlM1', 'p6ocrQ1', 'DeOdhJS', 'RF7g73D', 'HPvw0kq', 'o1uOS7E', 't4H9DP7', 'q4C1aFa', 'Kc09Wtd', 'vDALNpG', 'hMGDL9a', 'T+M\/J5P', 'fIGkp+A', 'SwTsWhd', '6V0Nhye', 'PKf9GYZ', 'hFeShQM', 'mXGACHR', 'opLOFUy', 'L+7UNOC', '2sU+jOw', 'clMFNvf', 'yooxF7B', 'OBNc2BT', '\/zbxQ3F', 'MUzrf5t', 'KP9vtM2', 'amUs4B+', 'ATH9bPv', 'zQYQqNb', 'Np2b6mH', 'S+SXpNg', 'HbZmd6x', 'A5W\/cee', 'dCd\/p2m', 'oU8\/MN9', 'c0sPj4p', 'DQ9JQyJ', 'AyEW6ap', 'XPOg7fi', 'D81PK1s', 'bKu1uaO', 'DC+2e4w', 'rdJmKol', 'Mffryiu', 'rxHxG1z', 'm1pQw1b', 'z8yT\/5E', 'wYnYT4n', 'FIinMQF', '\/FLguz0', '\/qw6Exm', 'HNJSLBJ', 'CJB5jIX', 'w3Wk9lz', '1EjliHc', 'e0W9dMY', '1gIQtPo', 'wZ7C2vM', '\/8WbbUa', 'fo+tiSR', '\/1fN\/Bb', 'LikKPaE', 'popcTSQ', 'bme4Lag', 'S6X0eY2', 'A2Znj1B', '7\/6ITAv', '3ESKnbe', 'cnBXKgJ', 'bG1x\/rg', 'ltr6kwu', '7dpGM6m', '+dmOh\/S', 'R0IT23T', 'NS5+QuY', 'ySf8cYD', '7haSbyr', 'O6fdJCG', 'YFC1f+b', '\/t8dtgI', 'KxFzGxH', 'b8E7maP', 'avghBYZ', 'ix+gYi1', 'RpxWbM9', 'B4jV6ay', 'zB\/rRDj', 'da0fSo5', 'URcsMgh', 'VNFIl3N', 'acm\/4bj', 'cl4FKLb', 'nQ1LPEi', 'f9ky1ix'],
              'rdfds': {
                'm': ['GamesVideoModerationRulesNux.react', 'GamesVideoDeleteCommentDialog.react', 'GamesVideoCommentRemovedDialog.react', 'CometTooltipDeferredImpl.react'],
                'r': ['Fsrrx\/O', '88vrm\/B', 'exLGtSF', 'YuFdUZF', 'eEXooSh', 'cKXUyua', '7k\/UUPf', 'N3iHjKv'],
              },
              'rds': {
                'm': ['PresenceStatus', 'FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED', 'Animation', 'PageTransitions', 'LynxAsyncCallbackFalcoEvent', 'CometSuspenseFalcoEvent'],
                'r': ['IfCgv8r', 'o4872U0'],
              },
              'be': 1,
            },
            'PhotoTags': { 'r': ['tW++MDr', '7haSbyr', 'O6fdJCG', 'KxFzGxH', 'OBNc2BT'], 'be': 1 },
            'TagTokenizer': {
              'r': ['PKf9GYZ', 'clMFNvf', 'OBNc2BT', 'EpV5H+m', 'tW++MDr', 'XPOg7fi', 'LikKPaE', 'EUuxD6w', 'NS5+QuY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'RpxWbM9', 'E22Znle'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['ix+gYi1'] },
              'be': 1,
            },
            'AsyncDialog': {
              'r': ['MtnSIhn', 'HPvw0kq', 'Kc09Wtd', 'vDALNpG', 'T+M\/J5P', 'PKf9GYZ', 'clMFNvf', 'OBNc2BT', '\/FLguz0', 'e0W9dMY', '\/1fN\/Bb', '3ESKnbe', 'ltr6kwu', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1', 'RpxWbM9', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'] },
              'be': 1,
            },
            'Hovercard': {
              'r': ['MtnSIhn', 'vDALNpG', 'T+M\/J5P', 'PKf9GYZ', 'hFeShQM', 'OBNc2BT', 'MUzrf5t', 'HbZmd6x', 'XPOg7fi', 'rxHxG1z', 'e0W9dMY', '\/8WbbUa', '3ESKnbe', 'cnBXKgJ', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1', 'RpxWbM9', 'URcsMgh', 'VNFIl3N', 'ltr6kwu', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED', 'PageTransitions', 'Animation'] },
              'be': 1,
            },
            'XSalesPromoWWWDetailsDialogAsyncController': { 'r': ['gWMJgTe'], 'be': 1 },
            'XOfferController': { 'r': ['hIek+bG'], 'be': 1 },
            'PerfXSharedFields': { 'r': ['O6fdJCG', 'KxFzGxH'], 'be': 1 },
            'ODS': { 'r': ['ySf8cYD', 'KxFzGxH'], 'be': 1 },
            'KeyEventTypedLogger': {
              'r': ['Hpk9Par', 'ySf8cYD', 'acm\/4bj'],
              'rds': { 'm': ['BanzaiScuba_DEPRECATED'] },
              'be': 1,
            },
            'Dialog': {
              'r': ['MtnSIhn', 'T+M\/J5P', 'PKf9GYZ', 'opLOFUy', 'OBNc2BT', 'e0W9dMY', '7dpGM6m', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1', 'RpxWbM9', '3ESKnbe', 'ltr6kwu', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent', 'Animation', 'PageTransitions', 'BanzaiScuba_DEPRECATED'] },
              'be': 1,
            },
            'ExceptionDialog': {
              'r': ['MtnSIhn', 'HPvw0kq', 'Kc09Wtd', 'vDALNpG', 'T+M\/J5P', 'PKf9GYZ', 'OBNc2BT', 'MUzrf5t', 'GJx2DpI', 'XPOg7fi', 'bD\/1ONl', 'm1pQw1b', '\/FLguz0', 'HNJSLBJ', 'e0W9dMY', '\/1fN\/Bb', '3ESKnbe', 'bG1x\/rg', 'ySf8cYD', 'aHLA98t', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1', 'RpxWbM9', 'URcsMgh', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'] },
              'be': 1,
            },
            'QuickSandSolver': {
              'r': ['+ClWygH', '8ELCBwH', 'bKu1uaO', 'e0W9dMY', 'nchbHvH', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'RpxWbM9', 'OBNc2BT'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['ix+gYi1'] },
              'be': 1,
            },
            'ConfirmationDialog': { 'r': ['oE4DofT', 'PKf9GYZ', 'KxFzGxH', 'RpxWbM9', 'OBNc2BT'], 'be': 1 },
            'QPLInspector': { 'r': ['VvVFw8n'], 'be': 1 },
            'ReactDOM': { 'r': ['3ESKnbe', 'ltr6kwu', 'VNFIl3N', 'acm\/4bj', 'KxFzGxH', 'OBNc2BT'], 'be': 1 },
            'ContextualLayerInlineTabOrder': {
              'r': ['PKf9GYZ', 'hFeShQM', 'OBNc2BT', 'R0IT23T', 'O6fdJCG', 'YFC1f+b', 'KxFzGxH'],
              'be': 1,
            },
            'XUIDialogButton.react': {
              'r': ['MtnSIhn', 'HPvw0kq', 'T+M\/J5P', 'PKf9GYZ', '\/FLguz0', 'HNJSLBJ', 'e0W9dMY', '\/1fN\/Bb', '3ESKnbe', 'bG1x\/rg', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'URcsMgh', 'OBNc2BT', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['ix+gYi1'] },
              'be': 1,
            },
            'XUIDialogBody.react': {
              'r': ['MtnSIhn', 'T+M\/J5P', 'PKf9GYZ', 'OBNc2BT', 'HNJSLBJ', '3ESKnbe', 'bG1x\/rg', 'KxFzGxH', 'VNFIl3N', 'ySf8cYD', 'acm\/4bj'],
              'be': 1,
            },
            'XUIDialogFooter.react': {
              'r': ['MtnSIhn', 'Kc09Wtd', 'vDALNpG', 'T+M\/J5P', 'PKf9GYZ', 'OBNc2BT', 'XPOg7fi', 'HNJSLBJ', '3ESKnbe', 'bG1x\/rg', 'KxFzGxH', 'VNFIl3N', 'ySf8cYD', 'acm\/4bj'],
              'be': 1,
            },
            'XUIDialogTitle.react': {
              'r': ['MtnSIhn', 'HPvw0kq', 'Kc09Wtd', 'vDALNpG', 'T+M\/J5P', 'PKf9GYZ', 'e0W9dMY', '\/1fN\/Bb', '3ESKnbe', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'OBNc2BT', 'VNFIl3N', 'acm\/4bj'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'], 'r': ['ix+gYi1'] },
              'be': 1,
            },
            'XUIGrayText.react': {
              'r': ['MtnSIhn', 'PKf9GYZ', 'OBNc2BT', 'HNJSLBJ', '3ESKnbe', 'aHLA98t', 'KxFzGxH', 'VNFIl3N', 'ySf8cYD', 'acm\/4bj'],
              'be': 1,
            },
            'DialogX': {
              'r': ['MtnSIhn', 'vDALNpG', 'T+M\/J5P', 'PKf9GYZ', 'OBNc2BT', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1', 'RpxWbM9'],
              'rds': { 'm': ['FbtLogging', 'IntlQtEventFalcoEvent'] },
              'be': 1,
            },
            'React': { 'r': ['3ESKnbe', 'acm\/4bj'], 'be': 1 },
          },
        })
      })</script>
    <script>requireLazy(['InitialJSLoader'], function (InitialJSLoader) {InitialJSLoader.loadOnDOMContentReady(['x1V\/D6b', 'e0W9dMY', 'ix+gYi1', 'RpxWbM9', 'MtnSIhn', 'PKf9GYZ', '3ESKnbe', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'YFC1f+b', 'sFOXIKj', 'ltr6kwu', 'R0IT23T', '\/t8dtgI', 'ycFdVta', 'rxHxG1z', '\/8WbbUa', 'vDALNpG', 'b8E7maP', 'acm\/4bj', 'VNFIl3N', 'P\/mr5VE'])})</script>
    <script>requireLazy(['TimeSliceImpl', 'ServerJS'], function (TimeSlice, ServerJS) {
        var s = (new ServerJS())
        s.handle({
          'define': [['LinkshimHandlerConfig', [], {
            'supports_meta_referrer': true,
            'default_meta_referrer_policy': 'origin-when-crossorigin',
            'switched_meta_referrer_policy': 'origin',
            'non_linkshim_lnfb_mode': null,
            'link_react_default_hash': 'AT2RICGoRF4X_zrTh1dEVlAv0J79uuRUc6owYDfs015_hMi1sMT2pc0aVmIq6Fh9mDm9rcHXZacj9MRtx5Ok5DJNGAUiq78lUmVVy7-h7S8iJgpt4TGpuKEH8nJzu24dDF2Xrcl203Cqwzh-klrleNltv3Bzxa3X-SzG',
            'untrusted_link_default_hash': 'AT3LR2roJaFVXhnV66lzRxir7fsFzK_RYJ8Ub8YxrHFPiJBJAfzkWS46Dneg_xu9eSHnn_CfQXO0zb9LmjfhlIvayuRzcus4ZfzQo5_qqrs0ixT5By5yS1DFa2F4Feni213XlJ8OssBm-6VPK6Q6gzD04EL1myBM1vhp',
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
          'instances': [['__inst_5b4d0c00_0_0_kk', ['Menu', 'XUIMenuWithSquareCorner', 'XUIMenuTheme'], [[], {
            'id': 'u_0_0_l1',
            'behaviors': [{ '__m': 'XUIMenuWithSquareCorner' }],
            'theme': { '__m': 'XUIMenuTheme' },
          }], 2], ['__inst_5b4d0c00_0_1_0w', ['Menu', 'MenuItem', '__markup_3310c079_0_0_01', 'HTML', '__markup_3310c079_0_1_ui', '__markup_3310c079_0_2_Cr', '__markup_3310c079_0_3_Kg', 'XUIMenuWithSquareCorner', 'XUIMenuTheme'], [[{
            'value': 'key_shortcuts',
            'ctor': { '__m': 'MenuItem' },
            'markup': { '__m': '__markup_3310c079_0_0_01' },
            'label': 'Aide sur les raccourcis clavier...',
            'title': '',
            'className': null,
          }, {
            'href': '\/help\/accessibility',
            'target': '_blank',
            'value': 'help_center',
            'ctor': { '__m': 'MenuItem' },
            'markup': { '__m': '__markup_3310c079_0_1_ui' },
            'label': 'Centre d\u2019aide \u00e0 l\u2019accessibilit\u00e9',
            'title': '',
            'className': null,
          }, {
            'href': '\/help\/contact\/accessibility',
            'target': '_blank',
            'value': 'submit_feedback',
            'ctor': { '__m': 'MenuItem' },
            'markup': { '__m': '__markup_3310c079_0_2_Cr' },
            'label': 'Donner votre avis',
            'title': '',
            'className': null,
          }, {
            'href': '\/accessibility',
            'target': '_blank',
            'value': 'facebook_page',
            'ctor': { '__m': 'MenuItem' },
            'markup': { '__m': '__markup_3310c079_0_3_Kg' },
            'label': 'Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook',
            'title': 'Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook',
            'className': null,
          }], {
            'id': 'u_0_1_h\/',
            'behaviors': [{ '__m': 'XUIMenuWithSquareCorner' }],
            'theme': { '__m': 'XUIMenuTheme' },
          }], 2], ['__inst_e5ad243d_0_0_Hf', ['PopoverMenu', '__inst_1de146dc_0_1_r3', '__elem_ec77afbd_0_1_Dz', '__inst_5b4d0c00_0_1_0w'], [{ '__m': '__inst_1de146dc_0_1_r3' }, { '__m': '__elem_ec77afbd_0_1_Dz' }, { '__m': '__inst_5b4d0c00_0_1_0w' }, []], 2], ['__inst_e5ad243d_0_1_rk', ['PopoverMenu', '__inst_1de146dc_0_0_lv', '__elem_ec77afbd_0_0_Mi', '__inst_5b4d0c00_0_0_kk'], [{ '__m': '__inst_1de146dc_0_0_lv' }, { '__m': '__elem_ec77afbd_0_0_Mi' }, { '__m': '__inst_5b4d0c00_0_0_kk' }, []], 2], ['__inst_1de146dc_0_0_lv', ['Popover', '__elem_1de146dc_0_0_jg', '__elem_ec77afbd_0_0_Mi', 'ContextualLayerAutoFlip', 'ContextualDialogArrow'], [{ '__m': '__elem_1de146dc_0_0_jg' }, { '__m': '__elem_ec77afbd_0_0_Mi' }, [{ '__m': 'ContextualLayerAutoFlip' }, { '__m': 'ContextualDialogArrow' }], {
            'alignh': 'left',
            'position': 'below',
          }], 2], ['__inst_1de146dc_0_1_r3', ['Popover', '__elem_1de146dc_0_1_EA', '__elem_ec77afbd_0_1_Dz', 'ContextualLayerAutoFlip', 'ContextualDialogArrow'], [{ '__m': '__elem_1de146dc_0_1_EA' }, { '__m': '__elem_ec77afbd_0_1_Dz' }, [{ '__m': 'ContextualLayerAutoFlip' }, { '__m': 'ContextualDialogArrow' }], {
            'alignh': 'right',
            'position': 'below',
          }], 2]],
          'markup': [['__markup_3310c079_0_0_01', { '__html': 'Aide sur les raccourcis clavier...' }, 1], ['__markup_3310c079_0_1_ui', { '__html': 'Centre d\u2019aide \u00e0 l\u2019accessibilit\u00e9' }, 1], ['__markup_3310c079_0_2_Cr', { '__html': 'Donner votre avis' }, 1], ['__markup_3310c079_0_3_Kg', { '__html': 'Mises \u00e0 jour concernant l\u2019accessibilit\u00e9 de Facebook' }, 1], ['__markup_9f5fac15_0_1_UP', { '__html': '\u003Cdiv>\u003Cdiv class="_4-i2 _pig _9o-c _50f4">\u003Cdiv class="_9o-3">\u003Cdiv class="_9o-5">\u003Cimg class="img" src="https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/r\/ASdEZxy7vyy.png" alt="" width="32" height="32" \/>\u003Cdiv class="_6a uiPopover" id="u_0_f_35">\u003Ca role="button" class="_42ft _4jy0 _55pi _2agf _4o_4 _9o-e _p _4jy3 _517h _51sy" href="#" style="max-width:200px;" aria-haspopup="true" aria-expanded="false" rel="toggle" id="u_0_g_qi">\u003Cspan class="_-xe _3-8_">\u003Ci class="img sp_8MQ_tLRHai7 sx_a04701">\u003C\/i>\u003C\/span>\u003Cspan class="_55pe">\u003C\/span>\u003C\/a>\u003C\/div>\u003C\/div>\u003Cdiv id="cookie_banner_title" class="_9o-d">\u003Cdiv id="consent_cookies_title">Accepter les cookies de Facebook dans ce navigateur\u00a0?\u003C\/div>\u003C\/div>\u003C\/div>\u003Cdiv class="_9o-f">\u003Cdiv>Nous utilisons des cookies dans le but de personnaliser et d\u2019am\u00e9liorer notre contenu et nos services, de diffuser des publicit\u00e9s pertinentes et d\u2019offrir une exp\u00e9rience plus s\u00fbre. Vous pouvez v\u00e9rifier vos param\u00e8tres de cookies \u00e0 tout moment. Pour en savoir plus sur l\u2019utilisation des cookies et leurs param\u00e8tres, consultez notre \u003Ca href="https:\/\/www.facebook.com\/policies\/cookies\/" class="_9o-v" id="cpn-pv-link">politique d\u2019utilisation des cookies\u003C\/a>.\u003C\/div>\u003C\/div>\u003Cdiv class="_9o-r">\u003Cbutton value="1" class="_42ft _4jy0 _9o-s _4jy3 _517h _51sy" data-cookiebanner="manage_button" data-testid="cookie-policy-dialog-manage-button" title="G&#xe9;rer les param&#xe8;tres de donn&#xe9;es" type="submit" id="u_0_h_UP">G\u00e9rer les param\u00e8tres de donn\u00e9es\u003C\/button>\u003Cbutton value="1" class="_42ft _4jy0 _9o-t _4jy3 _4jy1 selected _51sy" data-cookiebanner="accept_button" data-testid="cookie-policy-dialog-accept-button" title="Tout accepter" type="submit" id="u_0_i_p3">Tout accepter\u003C\/button>\u003C\/div>\u003C\/div>\u003C\/div>' }, 5], ['__markup_9f5fac15_0_0_1Q', { '__html': '\u003Cdiv>\u003Cdiv class="_4-i2 _pig _9o-c _9pll _50f4">\u003Cdiv class="_9o-4 _9qnh">\u003Cdiv id="manage_cookies_title">Accepter les cookies\u00a0?\u003C\/div>\u003Cdiv class="_6a uiPopover" id="u_0_j_i9">\u003Ca role="button" class="_42ft _4jy0 _55pi _2agf _4o_4 _9o-e _p _4jy3 _517h _51sy" href="#" style="max-width:200px;" aria-haspopup="true" aria-expanded="false" rel="toggle" id="u_0_k_O3">\u003Cspan class="_-xe _3-8_">\u003Ci class="img sp_8MQ_tLRHai7 sx_a04701">\u003C\/i>\u003C\/span>\u003Cspan class="_55pe">\u003C\/span>\u003C\/a>\u003C\/div>\u003C\/div>\u003Cdiv class="_9o-g">\u003Cdiv>\u003Cp class="_9o-m">\u003Cdiv>Certains cookies sont n\u00e9cessaires pour utiliser nos services. Pour poursuivre sur Facebook, v\u00e9rifiez les param\u00e8tres pour les cookies et faites tous les changements que vous jugez n\u00e9cessaires avant de cliquer sur Accepter ci-dessous.\u003Cp>\u003Cp>Nous utilisons des cookies notamment pour vous montrer des publicit\u00e9s utiles et pertinentes sur et en dehors de Facebook. Vous pouvez en savoir plus sur notre utilisation des cookies en lisant notre \u003Ca href="https:\/\/www.facebook.com\/policies\/cookies\/" id="cpn-pv-link">Politique d\u2019utilisation des cookies\u003C\/a>. Les outils d\u00e9crits ci-dessous vous offrent \u00e9galement de nombreuses possibilit\u00e9s dehors de vos param\u00e8tres Facebook.\u003C\/p>\u003C\/p>\u003C\/div>\u003C\/p>\u003Cdiv>\u003Cp class="_9o-k">Contr\u00f4les\u003C\/p>\u003Cp>\u003Cdiv>\u003Cdiv class="_9o-h">\u003Cdiv>Accepter le cookie publicitaire principal de Facebook sur ce navigateur, dans le but essentiellement de diffuser, \u00e9valuer et am\u00e9liorer la pertinence des publicit\u00e9s\u00a0?\u003C\/div>\u003Cdiv>\u003Clabel class="_9nq9 _9si_">\u003Cinput name="optout_controls" class="_9nqa _9sj1" type="checkbox" value="fr" \/>\u003Cspan class="_9nqb _9sj0">\u003C\/span>\u003C\/label>\u003C\/div>\u003C\/div>\u003Cp>\u003Cdiv class="pam _9o-n uiBoxGray">\u003Cp class="_9o-o">Si vous ne voulez pas de ce cookie\u00a0:\u003C\/p>\u003Cp class="_9o-p">Vous continuerez \u00e0 voir des publicit\u00e9s lorsque vous \u00eates sur Facebook et nous utiliserons les informations \u00e0 notre disposition pour diffuser, \u00e9valuer et am\u00e9liorer la pertinence des publicit\u00e9s que vous voyez. Cela comprend notamment les informations que vous fournissez lorsque vous utilisez les produits Facebook, les informations li\u00e9es \u00e0 votre appareil et les informations des partenaires collect\u00e9es via des cookies et autres technologies de suivi. Vous pourrez toujours autoriser ce cookie sur des navigateurs ou appareils si vous ne l\u2019acceptez pas maintenant, auquel cas nous utiliserons les informations collect\u00e9es selon ce que vous aurez autoris\u00e9.\u003C\/p>\u003C\/div>\u003C\/p>\u003C\/div>\u003C\/p>\u003Cp>\u003Cdiv>\u003Cdiv class="_9o-h">\u003Cdiv class="_9o-i">Accepter les cookies provenant d\u2019autres entreprises que Facebook et destin\u00e9s \u00e0 optimiser les services, notamment personnaliser les contenus (y compris les publicit\u00e9s), \u00e9valuer les publicit\u00e9s, produire des statistiques et fournir une exp\u00e9rience plus s\u00fbre\u00a0?\u003C\/div>\u003Cdiv>\u003Clabel class="_9nq9 _9si_">\u003Cinput name="optout_controls" class="_9nqa _9sj1" type="checkbox" value="third_party" \/>\u003Cspan class="_9nqb _9sj0">\u003C\/span>\u003C\/label>\u003C\/div>\u003C\/div>\u003Cp>\u003Cdiv class="pam _9o-n uiBoxGray">\u003Cp class="_9o-o">Si vous ne voulez pas de ce cookie\u00a0:\u003C\/p>\u003Cp class="_9o-p">Nous utilisons notamment les cookies d\u2019autres sites pour activer les fonctionnalit\u00e9s qui vous permettent d\u2019inclure des GIF dans vos publications et vos commentaires, de regarder des vid\u00e9os et de jouer \u00e0 des jeux sur Facebook Gaming. Si vous n\u2019acceptez pas les cookies des autres sites, les fonctionnalit\u00e9s de Facebook qui reposent sur les informations de ces sites et applications pourraient ne pas fonctionner.\u003C\/p>\u003C\/div>\u003C\/p>\u003C\/div>\u003C\/p>\u003C\/div>\u003Cdiv>\u003Cp class="_9o-k">Autres fa\u00e7ons de contr\u00f4ler votre suivi\u003C\/p>\u003C\/div>\u003Cdiv>\u003Cdiv class="_9vtg" id="u_0_l_V7">\u003Cbutton class="_9ngd _9nge" title="expandable section">\u003Cdiv class="_9ngc">\u003Cspan class="_9ngf">\u003Cdiv class="_9o-l">Param\u00e8tres de votre compte Facebook\u003C\/div>\u003C\/span>\u003Cspan class="_9ngg _9v7v">\u003Ci class="img sp_5iYm-45_v_9 sx_aa09c4">\u003C\/i>\u003C\/span>\u003C\/div>\u003C\/button>\u003Cdiv class="_9ngb _9nga">\u003Cdiv>\u003Cp class="_9o-m">Si vous avez un compte Facebook, vous pouvez g\u00e9rer l\u2019utilisation des diff\u00e9rentes donn\u00e9es pour personnaliser les publicit\u00e9s \u00e0 l\u2019aide de ces outils.\u003C\/p>\u003Cp class="_9si-">Param\u00e8tres des Publicit\u00e9s\u003C\/p>\u003Cp class="_9o-m">Pour vous montrer des publicit\u00e9s plus pertinentes, nous utilisons des donn\u00e9es que les annonceurs et d\u2019autres partenaires nous fournissent \u00e0 propos de votre activit\u00e9 en dehors des Produits des Entit\u00e9s Facebook, y compris sur des sites web et dans des applications. Vous pouvez d\u00e9cider si nous pouvons utiliser ou non ces donn\u00e9es pour vous montrer des publicit\u00e9s dans vos \u003Ca href="https:\/\/www.facebook.com\/settings\/ads\/">param\u00e8tres des Publicit\u00e9s\u003C\/a>.\u003C\/p>\u003Cp class="_9o-m">L\u2019Audience Network de Facebook est un moyen pour les annonceurs de vous montrer des publicit\u00e9s dans des applications et sur des sites web en dehors des \u003Ca href="https:\/\/www.facebook.com\/help\/195227921252400">Produits des Entit\u00e9s Facebook\u003C\/a>. L\u2019Audience Network peut vous montrer des publicit\u00e9s pertinentes notamment en utilisant vos pr\u00e9f\u00e9rences publicitaires pour d\u00e9terminer quelles publicit\u00e9s pourraient vous int\u00e9resser. Vous pouvez changer cela dans vos \u003Ca href="https:\/\/www.facebook.com\/settings\/ads\/">param\u00e8tres des Publicit\u00e9s\u003C\/a>.\u003C\/p>\u003Cp class="_9si-">Pr\u00e9f\u00e9rences publicitaires\u003C\/p>\u003Cp class="_9o-m">Vous pouvez utiliser vos pr\u00e9f\u00e9rences publicitaires pour d\u00e9couvrir pourquoi vous voyez une publicit\u00e9 en particulier et g\u00e9rer la fa\u00e7on dont nous utilisons les informations que nous recueillons pour vous montrer des publicit\u00e9s.\u003C\/p>\u003Cp class="_9si-">Activit\u00e9 en dehors de Facebook\u003C\/p>\u003Cp class="_9o-m">Vous pouvez consulter votre activit\u00e9 en dehors de Facebook, qui consiste en un r\u00e9sum\u00e9 de l\u2019activit\u00e9 que des entreprises et des organisations nous transmettent au sujet de vos interactions avec elles, comme l\u2019utilisation de leurs applications ou vos visites sur leurs sites web. Elles utilisent nos \u003Ca href="https:\/\/www.facebook.com\/help\/2230503797265156">outils Business\u003C\/a>, comme Facebook Login ou le pixel Facebook, pour nous transmettre ces informations. Cela nous permet notamment de vous offrir une exp\u00e9rience plus personnalis\u00e9e sur Facebook. Apprenez-en davantage sur l\u2019\u003Ca href="https:\/\/www.facebook.com\/help\/2207256696182627">activit\u00e9 en dehors de Facebook\u003C\/a>, l\u2019utilisation que nous en faisons et la mani\u00e8re dont vous pouvez la g\u00e9rer.\u003C\/p>\u003C\/div>\u003C\/div>\u003C\/div>\u003C\/div>\u003Cdiv>\u003Cdiv class="_9vtg" id="u_0_m_vy">\u003Cbutton class="_9ngd _9nge" title="expandable section">\u003Cdiv class="_9ngc">\u003Cspan class="_9ngf">\u003Cdiv class="_9o-l">Plus d\u2019informations sur les publicit\u00e9s en ligne\u003C\/div>\u003C\/span>\u003Cspan class="_9ngg _9v7v">\u003Ci class="img sp_5iYm-45_v_9 sx_aa09c4">\u003C\/i>\u003C\/span>\u003C\/div>\u003C\/button>\u003Cdiv class="_9ngb _9nga">\u003Cdiv>\u003Cp class="_9o-m">Vous pouvez choisir de ne pas voir les publicit\u00e9s en ligne bas\u00e9es sur les centres d\u2019int\u00e9r\u00eat de Facebook et d\u2019autres entreprises participantes via la \u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Foptout.aboutads.info\u00252F&amp;h=AT0-Y4aA8XbprOUq5ZLWf6YpQwG-dyB036iq3CezSk1QSF0bQXNwXfWEcfF5OP9XDh5Fi9InPIp9iWaWY2caXFajuUV2hiXaVGE_IAmoBW0yFVyC285SKnjwbJ6F3ObTm9-YhYzs3c2TUqLXUkE7J3HjErZNs3BcWqq1" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Digital Advertising Alliance\u003C\/a> aux \u00c9tats-Unis, la \u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fyouradchoices.ca\u00252F&amp;h=AT1tSMQTCTYEazdIN1lzn9FJq6rUWWMza8llRf0v6AOcmFFZcpfjDEGZIPWuXALWonzJNPPS_khdUR4QIZtOhtLC_o3cB7IZnMOoOTbf8a-_mplPPt7_xfq3fJ0KXLjun8khB4ozhUmDvCEjzyucHbjKumg6KRplJ_Uz" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Digital Advertising Alliance of Canada\u003C\/a> au Canada et l\u2019\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fwww.youronlinechoices.com\u00252F&amp;h=AT2CytXmb885w1zg10q0eHHEbD_CCmnKHFlnBZQXc0t71Cu-3DLAHqmYx0KZ8ONh7DqjThRXqZo7OTv_gPjn-j1HeluH03Xlithilq1TLL7FqgNIoEvCX9Je1P6W2yv2FrZvnMNDrTgR1_THBhqrzE-dQ5FXdDw_4msd" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">European Interactive Digital Advertising Alliance\u003C\/a> en Europe, ou encore dans les param\u00e8tres de votre appareil mobile si vous utilisez Android, iOS 13 ou une version d\u2019iOS ant\u00e9rieure. Veuillez noter que les bloqueurs de publicit\u00e9s et les outils qui limitent notre utilisation des cookies peuvent interf\u00e9rer avec ces param\u00e8tres.\u003C\/p>\u003Cp class="_9o-m">Les agences de publicit\u00e9 avec lesquelles nous travaillons utilisent g\u00e9n\u00e9ralement des cookies et des technologies similaires dans la prestation de leurs services. Pour en savoir plus sur la mani\u00e8re dont les annonceurs utilisent g\u00e9n\u00e9ralement les cookies ainsi que sur les choix qu\u2019ils offrent, vous pouvez consulter les ressources suivantes\u00a0:\u003C\/p>\u003Cul class="_9o-q">\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Foptout.aboutads.info\u00252F&amp;h=AT0GTfGA6KPnTMeJ9t8VEBozZXo3f4wxD5nym1G7LMwm2aGBznfyyxn7Ygw8tKUrwDBUATKnao6pfCejKMGFBRQyKiKVuSFof1JB4lIKRZyiiS8-ehWjArvjOriCsqmfdyvTDeo1t1FJQKR0NuxMZW0edO9oQo_4hUDh" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Digital Advertising Alliance\u003C\/a>\u003C\/li>\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fyouradchoices.ca\u00252F&amp;h=AT3sHOcyuOlviUSmsuGei4R0MPs3wKn3UnuuHSa8LPlHql-RzGZErq_EalJlQyM1UH-copvyn-Z0b3rjkqojVXEEsR5FiXoI8o0tQH5ZZWRD0fpocMqdwDTrrhZmJ87p7Nk5gj8i4tMxjXGXV6dWU6ZapPHqDrootHDv" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Digital Advertising Alliance of Canada\u003C\/a>\u003C\/li>\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fwww.youronlinechoices.com\u00252F&amp;h=AT3Orlvhkje1npDCTNicjQEU6pSTXHO5dF0E7mNLbSPxsIkDEidxCUtJszKE9jVYCIyDAxUoE84SI2RklbN26Im39OFVaNvKxbY_UJ28vVuzfzteGXa0gfHnPSNmURuFMKuv3ZXNY22vBMfNqlCj2zrXMQrYKsT-w3oB" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">European Interactive Digital Advertising Alliance\u003C\/a>\u003C\/li>\u003C\/ul>\u003C\/div>\u003C\/div>\u003C\/div>\u003C\/div>\u003Cdiv>\u003Cdiv class="_9vtg" id="u_0_n_s0">\u003Cbutton class="_9ngd _9nge" title="expandable section">\u003Cdiv class="_9ngc">\u003Cspan class="_9ngf">\u003Cdiv class="_9o-l">Contr\u00f4ler les cookies \u00e0 l\u2019aide des param\u00e8tres du navigateur\u003C\/div>\u003C\/span>\u003Cspan class="_9ngg _9v7v">\u003Ci class="img sp_5iYm-45_v_9 sx_aa09c4">\u003C\/i>\u003C\/span>\u003C\/div>\u003C\/button>\u003Cdiv class="_9ngb _9nga">\u003Cdiv>\u003Cp class="_9o-m">Votre navigateur ou appareil peut comprendre des param\u00e8tres vous permettant de choisir d\u2019activer ou non les cookies de navigateur et de les supprimer. Ces param\u00e8tres varient selon le navigateur, et les fabricants peuvent modifier les param\u00e8tres disponibles et leur fonctionnement \u00e0 tout moment. Depuis le 5 octobre 2020, vous pouvez trouver des informations suppl\u00e9mentaires sur les param\u00e8tres propos\u00e9s par les navigateurs les plus populaires en suivant les liens ci-dessous. Certaines fonctionnalit\u00e9s des produits Facebook pourraient ne pas fonctionner correctement si vous avez d\u00e9sactiv\u00e9 l\u2019utilisation des cookies de navigateur. Veuillez noter que ces param\u00e8tres diff\u00e8rent de ceux propos\u00e9s par Facebook.\u003C\/p>\u003Cul class="_9o-q">\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fsupport.google.com\u00252Fchrome\u00252Fanswer\u00252F95647&amp;h=AT3_3rnWBgI0LFLOnJ5rVka7JW1QkyPHfndfl1CVJBJAZ4XVbWEKhBH7wxEA1vDebjqsF20q8L40EbLYCNNzFfb5A1V5PhSECrzJBqRCthK3uQgpATQk5qWqyBt9Vpfy7OkxSHhdzxgHbTF3K5fJA1Su9A0cwSLKFZlh" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Google Chrome\u003C\/a>\u003C\/li>\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fsupport.microsoft.com\u00252Fen-ie\u00252Fhelp\u00252F17442\u00252Fwindows-internet-explorer-delete-manage-cookies&amp;h=AT0GkxgeylvNmUbJo1hWfXIvBRyajSAhaq8D7Pd5wsLFiQyZkeCILoIzsLaV3jB-kHJCbITRoyC3v81tRdGqJ6zICkbsR00RQgaP7N6nwanJ4SNKdoM8XeEFxT2Y0u3E0Trs2MxPjJhKwspjh3AXH4zgFAG0rRLGFwS_" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Internet Explorer\u003C\/a>\u003C\/li>\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fsupport.mozilla.org\u00252Fen-US\u00252Fkb\u00252Fenable-and-disable-cookies-website-preferences&amp;h=AT1xMgHjLEisR_RfUUbmeBFnAMcR8LS1difc43-Lo9OKPQVJIrqAwqCINad4fJhTBDVHJ4Aqrzp7E-eSqAmKWOw3b6ZvTBF62tIMs24SUkBLLjXg4dZmPNEn0rooZ6jmxACEtcopl4G5J4AK93BNAB3jCF5s1kiHLhqd" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Firefox\u003C\/a>\u003C\/li>\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fsupport.apple.com\u00252Fen-ie\u00252Fguide\u00252Fsafari\u00252Fsfri11471\u00252Fmac&amp;h=AT0SkDcQO1p3yDJWV-kJ3GPnHhp1lHQely__EbvHbg4IIhqugnmh870MueXc0P_0loWwBe_m9tvbHGT5vCEpgU-RRC0oAfh-Go4PZs7GMlzfiuZPF6qPzDLe3kTG0YuxZZ4E97re8kZGtBq83m9aWDQq807W72atIHuN" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Safari\u003C\/a>\u003C\/li>\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fsupport.apple.com\u00252Fen-us\u00252FHT201265&amp;h=AT1GKGZqWTvAB74YhtazCrFjhl5DVMNJC166LGsD5PsfTx5BU--m7-IniGTDqD7c0JHF8HzUuC6d3dkoXA8FKPCsqOHed4reGhiTmwXRJ-IEFQZp_DhLLmAzTCV1SfLbiGTgASBh2nsD4Cic61AON-m6nqnHT8yyBUnm" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Safari mobile\u003C\/a>\u003C\/li>\u003Cli>\u003Ca href="https:\/\/l.facebook.com\/l.php?u=https\u00253A\u00252F\u00252Fblogs.opera.com\u00252Fnews\u00252F2015\u00252F08\u00252Fhow-to-manage-cookies-in-opera\u00252F&amp;h=AT1A6uKAkRSwBOs7RbRxI21EW6nXPzJaYoUh1qYkxikMLpdDUPY5GXhVEsmZbHYfpm64fGrDn2XDHyvm7DfFVa7cqX_NyONaFcr7SQMgD98m4DwUqVE947W-zNITdi4o2c5DNb7_fIC1cwLU8JO9S7r1jQTv2B4YBaKT" target="_blank" rel="noopener nofollow" data-lynx-mode="asynclazy">Opera\u003C\/a>\u003C\/li>\u003C\/ul>\u003C\/div>\u003C\/div>\u003C\/div>\u003C\/div>\u003C\/div>\u003C\/div>\u003Cdiv class="_9o-r">\u003Cbutton value="1" class="_42ft _4jy0 _9o-u _4jy3 _4jy1 selected _51sy" data-cookiebanner="accept_button" data-testid="cookie-policy-manage-dialog-accept-button" title="Accepter les cookies" type="submit" id="u_0_o_PP">Accepter les cookies\u003C\/button>\u003C\/div>\u003C\/div>\u003C\/div>' }, 7], ['__markup_3310c079_0_4_Bi', { '__html': 'Bahasa Indonesia' }, 1], ['__markup_3310c079_0_5_EE', { '__html': 'Dansk' }, 1], ['__markup_3310c079_0_6_JX', { '__html': 'Deutsch' }, 1], ['__markup_3310c079_0_7_yT', { '__html': 'English (UK)' }, 1], ['__markup_3310c079_0_8_mz', { '__html': 'English (US)' }, 1], ['__markup_3310c079_0_9_Eo', { '__html': 'Espa\u00f1ol' }, 1], ['__markup_3310c079_0_a_6q', { '__html': 'Espa\u00f1ol (Espa\u00f1a)' }, 1], ['__markup_3310c079_0_b_Nj', { '__html': 'Fran\u00e7ais (France)' }, 1], ['__markup_3310c079_0_c_lh', { '__html': 'Italiano' }, 1], ['__markup_3310c079_0_d_a4', { '__html': 'Magyar' }, 1], ['__markup_3310c079_0_e_pU', { '__html': 'Nederlands' }, 1], ['__markup_3310c079_0_f_P3', { '__html': 'Norsk (bokm\u00e5l)' }, 1], ['__markup_3310c079_0_g_fx', { '__html': 'Polski' }, 1], ['__markup_3310c079_0_h_9s', { '__html': 'Portugu\u00eas (Brasil)' }, 1], ['__markup_3310c079_0_i_p8', { '__html': 'Portugu\u00eas (Portugal)' }, 1], ['__markup_3310c079_0_j_RO', { '__html': 'Rom\u00e2n\u0103' }, 1], ['__markup_3310c079_0_k_jN', { '__html': 'Suomi' }, 1], ['__markup_3310c079_0_l_kS', { '__html': 'Svenska' }, 1], ['__markup_3310c079_0_m_4w', { '__html': 'Ti\u1ebfng Vi\u1ec7t' }, 1], ['__markup_3310c079_0_n_1m', { '__html': 'T\u00fcrk\u00e7e' }, 1], ['__markup_3310c079_0_o_mm', { '__html': '\u010ce\u0161tina' }, 1], ['__markup_3310c079_0_p_LG', { '__html': '\u0395\u03bb\u03bb\u03b7\u03bd\u03b9\u03ba\u03ac' }, 1], ['__markup_3310c079_0_q_hj', { '__html': '\u0420\u0443\u0441\u0441\u043a\u0438\u0439' }, 1], ['__markup_3310c079_0_r_LX', { '__html': '\u05e2\u05d1\u05e8\u05d9\u05ea' }, 1], ['__markup_3310c079_0_s_4L', { '__html': '\u0627\u0644\u0639\u0631\u0628\u064a\u0629' }, 1], ['__markup_3310c079_0_t_C3', { '__html': '\u0939\u093f\u0928\u094d\u0926\u0940' }, 1], ['__markup_3310c079_0_u_6i', { '__html': '\u0e20\u0e32\u0e29\u0e32\u0e44\u0e17\u0e22' }, 1], ['__markup_3310c079_0_v_xo', { '__html': '\u4e2d\u6587(\u53f0\u7063)' }, 1], ['__markup_3310c079_0_w_di', { '__html': '\u4e2d\u6587(\u7b80\u4f53)' }, 1], ['__markup_3310c079_0_x_v2', { '__html': '\u4e2d\u6587(\u9999\u6e2f)' }, 1], ['__markup_3310c079_0_y_Nh', { '__html': '\u65e5\u672c\u8a9e' }, 1], ['__markup_3310c079_0_z_9s', { '__html': '\ud55c\uad6d\uc5b4' }, 1], ['__markup_3310c079_0_10_Mv', { '__html': 'Bahasa Indonesia' }, 1], ['__markup_3310c079_0_11_9y', { '__html': 'Dansk' }, 1], ['__markup_3310c079_0_12_hD', { '__html': 'Deutsch' }, 1], ['__markup_3310c079_0_13_6q', { '__html': 'English (UK)' }, 1], ['__markup_3310c079_0_14_Y9', { '__html': 'English (US)' }, 1], ['__markup_3310c079_0_15_Xh', { '__html': 'Espa\u00f1ol' }, 1], ['__markup_3310c079_0_16_Sn', { '__html': 'Espa\u00f1ol (Espa\u00f1a)' }, 1], ['__markup_3310c079_0_17_zA', { '__html': 'Fran\u00e7ais (France)' }, 1], ['__markup_3310c079_0_18_wN', { '__html': 'Italiano' }, 1], ['__markup_3310c079_0_19_+E', { '__html': 'Magyar' }, 1], ['__markup_3310c079_0_1a_\/O', { '__html': 'Nederlands' }, 1], ['__markup_3310c079_0_1b_s\/', { '__html': 'Norsk (bokm\u00e5l)' }, 1], ['__markup_3310c079_0_1c_1h', { '__html': 'Polski' }, 1], ['__markup_3310c079_0_1d_SF', { '__html': 'Portugu\u00eas (Brasil)' }, 1], ['__markup_3310c079_0_1e_3z', { '__html': 'Portugu\u00eas (Portugal)' }, 1], ['__markup_3310c079_0_1f_Eh', { '__html': 'Rom\u00e2n\u0103' }, 1], ['__markup_3310c079_0_1g_cs', { '__html': 'Suomi' }, 1], ['__markup_3310c079_0_1h_mH', { '__html': 'Svenska' }, 1], ['__markup_3310c079_0_1i_D4', { '__html': 'Ti\u1ebfng Vi\u1ec7t' }, 1], ['__markup_3310c079_0_1j_T3', { '__html': 'T\u00fcrk\u00e7e' }, 1], ['__markup_3310c079_0_1k_CS', { '__html': '\u010ce\u0161tina' }, 1], ['__markup_3310c079_0_1l_hn', { '__html': '\u0395\u03bb\u03bb\u03b7\u03bd\u03b9\u03ba\u03ac' }, 1], ['__markup_3310c079_0_1m_kA', { '__html': '\u0420\u0443\u0441\u0441\u043a\u0438\u0439' }, 1], ['__markup_3310c079_0_1n_eP', { '__html': '\u05e2\u05d1\u05e8\u05d9\u05ea' }, 1], ['__markup_3310c079_0_1o_N+', { '__html': '\u0627\u0644\u0639\u0631\u0628\u064a\u0629' }, 1], ['__markup_3310c079_0_1p_Xp', { '__html': '\u0939\u093f\u0928\u094d\u0926\u0940' }, 1], ['__markup_3310c079_0_1q_rI', { '__html': '\u0e20\u0e32\u0e29\u0e32\u0e44\u0e17\u0e22' }, 1], ['__markup_3310c079_0_1r_Fo', { '__html': '\u4e2d\u6587(\u53f0\u7063)' }, 1], ['__markup_3310c079_0_1s_jO', { '__html': '\u4e2d\u6587(\u7b80\u4f53)' }, 1], ['__markup_3310c079_0_1t_hq', { '__html': '\u4e2d\u6587(\u9999\u6e2f)' }, 1], ['__markup_3310c079_0_1u_z3', { '__html': '\u65e5\u672c\u8a9e' }, 1], ['__markup_3310c079_0_1v_mG', { '__html': '\ud55c\uad6d\uc5b4' }, 1]],
          'elements': [['__elem_a588f507_0_1_6r', 'u_0_2_pl', 1], ['__elem_3fc3da18_0_0_Qa', 'u_0_3_x9', 1], ['__elem_51be6cb7_0_0_2M', 'u_0_4_ai', 1], ['__elem_1de146dc_0_0_jg', 'u_0_5_ia', 1], ['__elem_ec77afbd_0_0_Mi', 'u_0_6_\/A', 2], ['__elem_1de146dc_0_1_EA', 'u_0_7_FU', 1], ['__elem_ec77afbd_0_1_Dz', 'u_0_8_hp', 2], ['__elem_a588f507_0_0_lG', 'globalContainer', 2], ['__elem_a588f507_0_2_vh', 'content', 1], ['__elem_835c633a_0_0_HH', 'login_form', 2], ['__elem_f46f4946_0_0_+j', 'u_0_9_pP', 1], ['__elem_f46f4946_0_1_uR', 'u_0_a_Pj', 1], ['__elem_70b16c69_0_0_D+', 'pass', 1], ['__elem_a588f507_0_3_X0', 'u_0_b_JC', 1], ['__elem_a588f507_0_4_I8', 'u_0_c_K7', 1], ['__elem_45d73b5d_0_3_+9', 'loginbutton', 1], ['__elem_1de146dc_0_3_eY', 'u_0_f_35', 1, '__markup_9f5fac15_0_1_UP'], ['__elem_ec77afbd_0_3_Hn', 'u_0_g_qi', 3, '__markup_9f5fac15_0_1_UP'], ['__elem_45d73b5d_0_1_mw', 'u_0_h_UP', 1, '__markup_9f5fac15_0_1_UP'], ['__elem_45d73b5d_0_0_8+', 'u_0_i_p3', 1, '__markup_9f5fac15_0_1_UP'], ['__elem_1de146dc_0_2_kR', 'u_0_j_i9', 1, '__markup_9f5fac15_0_0_1Q'], ['__elem_ec77afbd_0_2_69', 'u_0_k_O3', 3, '__markup_9f5fac15_0_0_1Q'], ['__elem_a588f507_0_5_l2', 'u_0_l_V7', 1, '__markup_9f5fac15_0_0_1Q'], ['__elem_a588f507_0_6_q1', 'u_0_m_vy', 1, '__markup_9f5fac15_0_0_1Q'], ['__elem_a588f507_0_7_qC', 'u_0_n_s0', 1, '__markup_9f5fac15_0_0_1Q'], ['__elem_45d73b5d_0_2_r5', 'u_0_o_PP', 1, '__markup_9f5fac15_0_0_1Q']],
          'require': [['ServiceWorkerLoginAndLogout', 'login', [], []], ['ScriptPath', 'set', [], ['XWebLoginController', '96e88af3', {
            'imp_id': '1ubMgPbKC6glKYGoQ',
            'ef_page': null,
            'uri': 'https:\/\/fr-fr.facebook.com\/login.php',
          }]], ['UITinyViewportAction', 'init', [], []], ['ResetScrollOnUnload', 'init', ['__elem_a588f507_0_0_lG'], [{ '__m': '__elem_a588f507_0_0_lG' }]], ['AccessibilityWebVirtualCursorClickLogger', 'init', ['__elem_a588f507_0_0_lG'], [[{ '__m': '__elem_a588f507_0_0_lG' }]]], ['KeyboardActivityLogger', 'init', [], []], ['FocusRing', 'init', [], []], ['HardwareCSS', 'init', [], []], ['NavigationAssistantController', 'init', ['__elem_3fc3da18_0_0_Qa', '__elem_51be6cb7_0_0_2M', '__inst_5b4d0c00_0_0_kk', '__inst_5b4d0c00_0_1_0w', '__inst_e5ad243d_0_0_Hf', '__inst_e5ad243d_0_1_rk'], [{ '__m': '__elem_3fc3da18_0_0_Qa' }, { '__m': '__elem_51be6cb7_0_0_2M' }, { '__m': '__inst_5b4d0c00_0_0_kk' }, { '__m': '__inst_5b4d0c00_0_1_0w' }, null, {
            'accessibilityPopoverMenu': { '__m': '__inst_e5ad243d_0_0_Hf' },
            'globalPopoverMenu': null,
            'sectionsPopoverMenu': { '__m': '__inst_e5ad243d_0_1_rk' },
          }]], ['__inst_e5ad243d_0_1_rk'], ['__inst_1de146dc_0_0_lv'], ['__inst_e5ad243d_0_0_Hf'], ['__inst_1de146dc_0_1_r3'], ['WebCookieLocaleSelectorHandler', 'init', ['__elem_ec77afbd_0_2_69', '__inst_02182015_0_0_1T'], [{ '__m': '__elem_ec77afbd_0_2_69' }, { '__m': '__inst_02182015_0_0_1T' }, 'fr_FR', true, 'Facebook']], ['__inst_ead1e565_0_0_hU'], ['WebCookieLocaleSelectorHandler', 'init', ['__elem_ec77afbd_0_3_Hn', '__inst_02182015_0_1_ar'], [{ '__m': '__elem_ec77afbd_0_3_Hn' }, { '__m': '__inst_02182015_0_1_ar' }, 'fr_FR', true, 'Facebook']], ['__inst_ead1e565_0_1_Ww'], ['WebCookieUseBlockingDialogController', 'init', ['__inst_ead1e565_0_1_Ww', '__elem_45d73b5d_0_0_8+', '__inst_ead1e565_0_0_hU', '__elem_45d73b5d_0_1_mw', '__elem_45d73b5d_0_2_r5'], [{ '__m': '__inst_ead1e565_0_1_Ww' }, { '__m': '__elem_45d73b5d_0_0_8+' }, { '__m': '__inst_ead1e565_0_0_hU' }, { '__m': '__elem_45d73b5d_0_1_mw' }, { '__m': '__elem_45d73b5d_0_2_r5' }, 'optout_controls', 'Facebook', false, null]], ['IntlUtils'], ['FBLynx', 'setupDelegation', [], []], ['TimezoneAutoset', 'setInputValue', ['__elem_f46f4946_0_0_+j'], [{ '__m': '__elem_f46f4946_0_0_+j' }, 1632768692]], ['ScreenDimensionsAutoSet', 'setInputValue', ['__elem_f46f4946_0_1_uR'], [{ '__m': '__elem_f46f4946_0_1_uR' }]], ['LoginFormController', 'init', ['__elem_835c633a_0_0_HH', '__elem_45d73b5d_0_3_+9'], [{ '__m': '__elem_835c633a_0_0_HH' }, { '__m': '__elem_45d73b5d_0_3_+9' }, null, true, {
            'pubKey': {
              'publicKey': '450604cb48d22517ae1e877555915a761c674d95476cb044985a81ecbb438634',
              'keyId': 168,
            },
          }]], ['PlatformDialogCBTSetter', 'setCBTInFormAndLog', ['__elem_835c633a_0_0_HH'], [{ '__m': '__elem_835c633a_0_0_HH' }, 'client_logged_out_init_impression']], ['BrowserPrefillLogging', 'initContactpointFieldLogging', [], [{
            'contactpointFieldID': 'email',
            'serverPrefill': '',
          }]], ['BrowserPrefillLogging', 'initPasswordFieldLogging', [], [{ 'passwordFieldID': 'pass' }]], ['LoginFormToggle', 'initToggle', ['__elem_a588f507_0_3_X0', '__elem_a588f507_0_4_I8', '__elem_70b16c69_0_0_D+'], [{ '__m': '__elem_a588f507_0_3_X0' }, { '__m': '__elem_a588f507_0_4_I8' }, { '__m': '__elem_70b16c69_0_0_D+' }]], ['FocusListener'], ['FlipDirectionOnKeypress'], ['Animation'], ['PageTransitions'], ['__inst_02182015_0_0_1T'], ['__inst_e5ad243d_0_2_O7'], ['__inst_1de146dc_0_2_Wi'], ['CookieAccordion', 'init', ['__elem_a588f507_0_5_l2'], [{ '__m': '__elem_a588f507_0_5_l2' }, '_9ngb', '._9nga', '._9ngd', '._9ngg']], ['CookieAccordion', 'init', ['__elem_a588f507_0_6_q1'], [{ '__m': '__elem_a588f507_0_6_q1' }, '_9ngb', '._9nga', '._9ngd', '._9ngg']], ['CookieAccordion', 'init', ['__elem_a588f507_0_7_qC'], [{ '__m': '__elem_a588f507_0_7_qC' }, '_9ngb', '._9nga', '._9ngd', '._9ngg']], ['__inst_02182015_0_1_ar'], ['__inst_e5ad243d_0_3_ec'], ['__inst_1de146dc_0_3_EF'], ['RequireDeferredReference', 'unblock', [], [['Animation', 'FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED', 'PageTransitions'], 'sd']], ['RequireDeferredReference', 'unblock', [], [['Animation', 'FbtLogging', 'IntlQtEventFalcoEvent', 'BanzaiScuba_DEPRECATED', 'PageTransitions'], 'css']], ['TimeSliceImpl'], ['HasteSupportData'], ['ServerJS'], ['Run'], ['InitialJSLoader']],
          'contexts': [[{ '__m': '__elem_a588f507_0_1_6r' }, true], [{ '__m': '__elem_a588f507_0_2_vh' }, true]],
        })
        requireLazy(['Run'], function (Run) {Run.onAfterLoad(function () {s.cleanup(TimeSlice)})})
      })</script>
    <script>now_inl = (function () {
        var p = window.performance
        return p && p.now && p.timing && p.timing.navigationStart ? function () {return p.now() + p.timing.navigationStart} : function () {return new Date().getTime()}
      })()
      window.__bigPipeFR = now_inl()</script>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yY/l/0,cross/CJYvcxnbDL_.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yX/l/0,cross/6pVNvv4BSRX.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yW/l/0,cross/UE1wdg7_Vsg.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yK/l/0,cross/JQKojJIIKDw.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/l/0,cross/KQN9gRJBI8O.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3iTOp4/yO/l/fr_FR/L1d008k8MHH.js?_nc_x=Ij3Wp8lg5Kz"
          as="script" crossorigin="anonymous" nonce="3PFf9U8N"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yr/r/BNzLtjA89q3.js?_nc_x=Ij3Wp8lg5Kz" as="script"
          crossorigin="anonymous" nonce="3PFf9U8N"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yF/r/dATna7NWzvc.js?_nc_x=Ij3Wp8lg5Kz" as="script"
          crossorigin="anonymous" nonce="3PFf9U8N"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yp/r/XpFprvKSai6.js?_nc_x=Ij3Wp8lg5Kz" as="script"
          crossorigin="anonymous" nonce="3PFf9U8N"/>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yt/l/0,cross/okWGGyYvRYX.css?_nc_x=Ij3Wp8lg5Kz"
          as="style" crossorigin="anonymous"/>
    <script>window.__bigPipeCtor = now_inl()
      requireLazy(['BigPipe'], function (BigPipe) {
        define('__bigPipe', [], window.bigPipe = new BigPipe({
          'forceFinish': true,
          'config': { 'flush_pagelets_asap': true, 'dispatch_pagelet_replayable_actions': false },
        }))
      })</script>
    <script nonce="3PFf9U8N">(function () {
        var n = now_inl()
        requireLazy(['__bigPipe'], function (bigPipe) {bigPipe.beforePageletArrive('first_response', n)})
      })()</script>
    <script nonce="3PFf9U8N">requireLazy(['__bigPipe'], (function (bigPipe) {
        bigPipe.onPageletArrive({
          displayResources: ['URcsMgh', 'OBNc2BT', 'cq9toiK', 'clMFNvf', 'T+M/J5P', 'e0W9dMY', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', '+X8x83b', 'P/mr5VE'],
          id: 'first_response',
          phase: 0,
          last_in_phase: true,
          tti_phase: 0,
          all_phases: [63],
          hsrp: { hblp: { sr_revision: 1004458814, consistency: { rev: 1004458814 } } },
          allResources: ['URcsMgh', 'OBNc2BT', 'cq9toiK', 'clMFNvf', 'x1V/D6b', 'e0W9dMY', 'ix+gYi1', 'RpxWbM9', 'MtnSIhn', 'PKf9GYZ', '3ESKnbe', 'ySf8cYD', 'O6fdJCG', 'KxFzGxH', 'YFC1f+b', 'sFOXIKj', 'T+M/J5P', '+X8x83b', 'ltr6kwu', 'R0IT23T', '/t8dtgI', 'ycFdVta', 'P/mr5VE', 'rxHxG1z', '/8WbbUa', 'vDALNpG', 'b8E7maP', 'acm/4bj', 'VNFIl3N'],
        })
      }))</script>
    <script>requireLazy(['__bigPipe'], function (bigPipe) {bigPipe.setPageID('7012688135346302334-0')})
      CavalryLogger.setPageID('7012688135346302334-0')</script>
    <script nonce="3PFf9U8N">(function () {
        var n = now_inl()
        requireLazy(['__bigPipe'], function (bigPipe) {bigPipe.beforePageletArrive('last_response', n)})
      })()</script>
    <script nonce="3PFf9U8N">requireLazy(['__bigPipe'], (function (bigPipe) {
        bigPipe.onPageletArrive({
          displayResources: ['ySf8cYD'],
          id: 'last_response',
          phase: 63,
          last_in_phase: true,
          the_end: true,
          jsmods: {
            define: [['TimeSliceInteractionSV', [], {
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
            }, 5332], ['cr:1642797', ['BanzaiBase'], { __rc: ['BanzaiBase', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:917439', ['PageTransitionsBlue'], { __rc: ['PageTransitionsBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1108857', [], { __rc: [null, 'Aa1J4i2EoYD6TvnZDuYSAfdeQ7iOQLDPHpmhB1RqY-A13xgSpbqxzw9CIJNIlB_0LjA7jxF5NtW2pW24Jw'] }, -1], ['cr:1269707', [], { __rc: [null, 'Aa1Yizw5K8_Lp-5926VGvbc8qNxMSFc30wa51ifE6QlfBt9HlWEW0-79xea3o14AFvxGNMT7gxlbKZGwOv7Zz3k'] }, -1], ['cr:1269708', [], { __rc: [null, 'Aa1Yizw5K8_Lp-5926VGvbc8qNxMSFc30wa51ifE6QlfBt9HlWEW0-79xea3o14AFvxGNMT7gxlbKZGwOv7Zz3k'] }, -1], ['cr:1269709', [], { __rc: [null, 'Aa1Yizw5K8_Lp-5926VGvbc8qNxMSFc30wa51ifE6QlfBt9HlWEW0-79xea3o14AFvxGNMT7gxlbKZGwOv7Zz3k'] }, -1], ['cr:1294158', ['React.classic'], { __rc: ['React.classic', 'Aa2vneUJ6G7yHTlLjtn0VcDN5djZqAzZs-aS6Id2eUuN1y9rXDxOuYjEm-didh7cOmSXWK9rZls-r9aKRLm7LrQbVKu5'] }, -1], ['cr:1294246', ['ReactDOM.classic'], { __rc: ['ReactDOM.classic', 'Aa2vneUJ6G7yHTlLjtn0VcDN5djZqAzZs-aS6Id2eUuN1y9rXDxOuYjEm-didh7cOmSXWK9rZls-r9aKRLm7LrQbVKu5'] }, -1], ['cr:1069930', [], { __rc: [null, 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1083116', ['XAsyncRequest'], { __rc: ['XAsyncRequest', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1083117', [], { __rc: [null, 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1697455', ['CookieConsentActionHandler'], { __rc: ['CookieConsentActionHandler', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:11202', [], { __rc: [null, 'Aa1J4i2EoYD6TvnZDuYSAfdeQ7iOQLDPHpmhB1RqY-A13xgSpbqxzw9CIJNIlB_0LjA7jxF5NtW2pW24Jw'] }, -1], ['cr:888908', ['warningBlue'], { __rc: ['warningBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:971473', ['LayerHideOnTransition'], { __rc: ['LayerHideOnTransition', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1105154', [], { __rc: [null, 'Aa1J4i2EoYD6TvnZDuYSAfdeQ7iOQLDPHpmhB1RqY-A13xgSpbqxzw9CIJNIlB_0LjA7jxF5NtW2pW24Jw'] }, -1], ['BanzaiConfig', [], {
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
            }, 7], ['PageTransitionsConfig', [], { reloadOnBootloadError: true }, 1067], ['CoreWarningGK', [], { forceWarning: false }, 725], ['cr:692209', ['cancelIdleCallbackBlue'], { __rc: ['cancelIdleCallbackBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1292365', ['React-prod.classic'], { __rc: ['React-prod.classic', 'Aa1J4i2EoYD6TvnZDuYSAfdeQ7iOQLDPHpmhB1RqY-A13xgSpbqxzw9CIJNIlB_0LjA7jxF5NtW2pW24Jw'] }, -1], ['cr:1344485', ['ReactDOM.classic.prod-or-profiling'], { __rc: ['ReactDOM.classic.prod-or-profiling', 'Aa1J4i2EoYD6TvnZDuYSAfdeQ7iOQLDPHpmhB1RqY-A13xgSpbqxzw9CIJNIlB_0LjA7jxF5NtW2pW24Jw'] }, -1], ['cr:983844', [], { __rc: [null, 'Aa1J4i2EoYD6TvnZDuYSAfdeQ7iOQLDPHpmhB1RqY-A13xgSpbqxzw9CIJNIlB_0LjA7jxF5NtW2pW24Jw'] }, -1], ['cr:1344486', ['ReactDOM.classic.prod'], { __rc: ['ReactDOM.classic.prod', 'Aa397dPHwxPmjt3_B8vE4MKLswhFlc_EzbBS3F10xIReGYuu_kDxlsnnwKpr6P-8Ef3S6rTXcpGLyNmRgz4UqqUk0pvuSCJwrw'] }, -1], ['cr:1344487', ['ReactDOM-prod.classic'], { __rc: ['ReactDOM-prod.classic', 'Aa0FGWEIaW8vErJk8AfVSL8YwGni76fr4tcL3hie6_x0P0yBjJlBnrJXnckMCSIdso54YQoOY9GKPg8HSi9Ten75qSFpTbee4QE6EUGM'] }, -1], ['cr:1353359', ['EventListenerImplForBlue'], { __rc: ['EventListenerImplForBlue', 'Aa3sOKS5DuWZ8sdeUr1Lt2RlmzlltIYXKnd4Y7IAfZkZkg7I6W_u7AILRyRwhwuIBWvrw5fITku28TQQaxlH7W-tusduvXNYdA'] }, -1], ['KillabyteProfilerConfig', [], {
              htmlProfilerModule: null,
              profilerModule: null,
              depTypes: { BL: 'bl', NON_BL: 'non-bl' },
            }, 1145], ['QuicklingConfig', [], {
              version: '1004459420;0;',
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
            }, 142], ['cr:844180', ['TimeSpentImmediateActiveSecondsLoggerBlue'], { __rc: ['TimeSpentImmediateActiveSecondsLoggerBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1187159', ['BlueCompatBroker'], { __rc: ['BlueCompatBroker', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['cr:1634616', ['UserActivityBlue'], { __rc: ['UserActivityBlue', 'Aa0zwb3TxBo_gBlA5BFTK9Za5VWvxpB7DfDT8K0WrxSKdHa4h63yOmgrGCJilkCm_yKmgONxnPw5HB4fRO15Y4LAsvM'] }, -1], ['ImmediateActiveSecondsConfig', [], { sampling_rate: 0 }, 423]],
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
              hbv: '760203037911708423',
            }]], ['CavalryLoggerImpl', 'startInstrumentation', [], []], ['NavigationMetrics', 'setPage', [], [{
              page: 'XWebLoginController',
              page_type: 'normal',
              page_uri: 'https://fr-fr.facebook.com/login.php',
              serverLID: '7012688135346302334-0',
            }]], ['FalcoLoggerTransports', 'attach', [], []], ['Chromedome', 'start', [], [{}]], ['NavigationClickPointHandler'], ['DeferredCookie', 'addToQueue', [], ['_js_datr', 'tBJSYajaNkKfEMFS4zBeHkql', 63072000000, '/', true, false, true]], ['DeferredCookie', 'addToQueue', [], ['_js_sb', 'tBJSYUUYWf2eocgbGmuonnai', 63072000000, '/', false, false, true]], ['DeferredCookie', 'addToQueue', [], ['_js_fr', '0Q6shrbTta5lV7fsf..BhUhK0.iK.AAA.0.0.BhUhK0.AWUPayOQlVs', 7775999000, '/', false, false, true]], ['ClickRefLogger'], ['DetectBrokenProxyCache', 'run', [], [0, 'c_user']], ['WebDevicePerfInfoLogging', 'doLog', [], []], ['Artillery', 'disable', [], []], ['ScriptPathLogger', 'startLogging', [], []], ['TimeSpentBitArrayLogger', 'init', [], []], ['RequireDeferredReference', 'unblock', [], [['VisualCompletionGating'], 'sd']], ['RequireDeferredReference', 'unblock', [], [['VisualCompletionGating'], 'css']]],
          },
          hsrp: {
            hsdp: {
              clpData: {
                '1743095': { r: 1, s: 1 },
                '1871697': { r: 1, s: 1 },
                '1829319': { r: 1 },
                '1829320': { r: 1 },
                '1843988': { r: 1 },
              },
              gkxData: { '1652843': { result: false, hash: 'AT6uh9NWRY4QEQoYA9g' } },
              qexData: { '715': { r: null } },
            },
            hblp: {
              sr_revision: 1004458814,
              consistency: { rev: 1004458814 },
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
          allResources: ['07F+uI8', 'FEt5GzN', 'w3Wk9lz', 'e0W9dMY', 'bme4Lag', 'O6fdJCG', 'KxFzGxH', 'ix+gYi1', 'PKf9GYZ', 'sFOXIKj', 'YFC1f+b', 'ySf8cYD'],
          onload: ['CavalryLogger.getInstance("7012688135346302334-0").setTTIEvent("t_domcontent");'],
          onafterload: ['CavalryLogger.getInstance("7012688135346302334-0").collectBrowserTiming(window)', 'window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp("t_paint");', 'if (window.ExitTime){CavalryLogger.getInstance("7012688135346302334-0").setValue("t_exit", window.ExitTime);};'],
        })
      }))</script>
</body>
</html>
