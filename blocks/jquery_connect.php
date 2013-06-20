<script src="http://www.google.com/jsapi"></script>
        <script type="text/javascript">
            // Подключение jQuery
            google.load('jquery', '1.4.2');
            google.setOnLoadCallback(function()
            {
                $(".like-Unlike").click(function(e) {
                    if ($(this).html() == "Like") {
                        $(this).html('Unlike');
                    }
                    else {
                        $(this).html('Like');
                    }
                    return false;
                });
            });
        </script>
