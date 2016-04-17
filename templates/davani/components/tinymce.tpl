<script src="{$ABSOLUTE_URL}/libs/tinymce/tinymce.min.js"></script>
{literal}
<script type="text/javascript">
        tinymce.init({
            selector: "#editor",
            file_browser_callback : 
                function(field_name, url, type, win){
                {/literal}
                    var filebrowser = "{$ABSOLUTE_URL}mi-cuenta/explorador-de-archivos/input";
                {literal}
                    filebrowser += (filebrowser.indexOf("?") < 0) ? "?type=" + type : "&type=" + type;
                    tinymce.activeEditor.windowManager.open({
                    title : "Insertar fichero",
                    width : 520,
                    height : 400,
                    url : filebrowser
                    }, {
                    window : win,
                    input : field_name
                    });
                    return false;
                },
            fontsize_formats: "8px 10px 12px 14px 18px 24px 36px",
            language : 'es',
            selector: "#editor",
            convert_urls: false,
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste ",
                "textcolor colorpicker"
            ],
            toolbar1: " bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | fontselect fontsizeselect forecolor backcolor | undo redo "
        });
            
</script>
{/literal}