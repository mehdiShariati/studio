<script src="/js/ckeditor.js" ></script>



<script >
    {{--CKFinder.uploadUrl="{{route('etc.page.uploadimage')}}";--}}

    ClassicEditor
        .create( document.querySelector( '#ckeditor' ), {

            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'indent',
                    'outdent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'undo',
                    'redo',
                    'alignment',
                    'CKFinder',
                    'fontBackgroundColor',
                    'fontColor',
                    'fontFamily',
                    'fontSize',
                    'highlight',
                    'horizontalLine',
                    'imageInsert',
                    'pageBreak',
                    'removeFormat',
                    'restrictedEditingException',
                    'underline'
                ]
            },
            language: 'fa',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side',
                    'linkImage'
                ],
            },
            ckfinder: {
                // Upload the images to the server using the CKFinder QuickUpload command.
                uploadUrl:"{{route('etc.page.uploadimage')}}"

            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells',
                    'tableCellProperties',
                    'tableProperties'
                ]
            },
            licenseKey: '',

        } )

        .catch( error => {

        } );
</script>


</script>
