const mix = require('laravel-mix');



/*mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');*/

   mix.styles([             
       'node_modules/admin-lte/plugins/chart.js/Chart.min.css',

   'resources/plantilla/css/estilo2.css',
    'resources/plantilla/css/cards.css',
    'resources/plantilla/css/w3.css',
], 'public/css/plantilla.css')
.styles([    
    'https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700',
    'node_modules/admin-lte/docs_html/assets/plugins/fontawesome-free/css/all.min.css',
    'node_modules/admin-lte/docs_html/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css',
    'node_modules/admin-lte/docs_html/assets/css/docs.css',
    'node_modules/admin-lte/docs_html/assets/css/adminlte.min.css',
    'node_modules/admin-lte/dist/css/adminlte.min.css',
    'node_modules/admin-lte/docs_html/assets/css/highlighter.css',
],'public/css/lte-template.css')


    .scripts([
        'resources/plantilla/js/jquery-nestable/jquery.nestable.js',
    ], 'public/js/jquery.nestable.js')

    .scripts([
        'public/assets/pages/scripts/admin/index.js',
        'public/vendor/stringToSlug/jquery.stringToSlug.min.js',

        'resources/plantilla/js/plugins/bootstrap/js/bootstrap.bundle.min.js',
        'resources/plantilla/js/plugins/fastclick/fastclick.js',
        'resources/plantilla/css/lte/dist/js/adminlte.min.js',
        'resources/plantilla/lte/dist/js/demo.js',

        'node_modules/admin-lte/plugins/chart.js/Chart.min.js',
        'plantilla/js/jqery-validation/localization/messages_es.js',
        'resources/plantilla/js/jqery-validation/core.js',
        'resources/plantilla/js/sweetalert.min.js',
        'resources/plantilla/js/toastr.min.js',
        
        'resources/plantilla/js/scripts.js',
        'resources/plantilla/js/funciones.js',
        'https://demos.creative-tim.com/vue-light-bootstrap-dashboard/static/js/manifest.f85f24d2f5c676842790.js',
        'https://demos.creative-tim.com/vue-light-bootstrap-dashboard/static/js/vendor.80a4b9af77e816b44b5f.js',
        'https://demos.creative-tim.com/vue-light-bootstrap-dashboard/static/js/app.b9f64045ed4f0cfb1cb8.js'
    ], 'public/js/plantilla.js')
    