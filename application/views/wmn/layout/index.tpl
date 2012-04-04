<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>{$globalTitle}</title>
        <link href="/css/styles.css" rel="stylesheet" type="text/css" />
        <script src="/js/libs/jquery.js"></script>
        <script src="/js/main.js"></script>
        <link rel="icon" href="/favicon-eve.ico" type="image/x-icon" />
        <link rel="shortcut icon" href="/favicon-eve.ico" type="image/x-icon" />
        {foreach from=$siteMeta item=meta}
        <meta content="{$meta->content}" name="{$meta->name}" />
        {/foreach}
        {$additionMetaTags}
    </head>    
    <body>
        <div id="header">
            {include file="inc/header.tpl"}
        </div>
        <div id="center">
            {include file=`$template`}
        </div>
        <div id="footer">
            {include file="inc/footer.tpl"}
        </div>
    </body>
</html>