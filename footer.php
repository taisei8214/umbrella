<footer id="footer">
    Copyright <a href="http://webukatu.com/">ウェブカツ!!WEBサービス部</a>。All Rights Reserved.
</footer>

<script src="js/vendor/jquery-3.4.1.slim.min.js"></script>
<script>
    $(function(){
        var $ftr = $('#footer');
        if( window.innnerHeight > $ftr.offset(.top + $ftr.outHeght() ){
            $ftr.attr({'style': 'position:fixed; top:' + (window.innnerHeight - $ftr.outHeight()) + 'px;' });
        }
    });
</script>
</body>
</html>