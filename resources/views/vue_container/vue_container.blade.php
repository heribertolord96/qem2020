@extends("theme/lte/layout")
 @section('vue_container')

<template v-if="menu==4">
    <my_commerces> </my_commerces>
</template>
<!--Administrar-->

<template v-if="menu==0">
    <commercetemplate> </commercetemplate>
</template>

<template v-if="menu==1">
    <products> </products>
</template>
<template v-if="menu==2">
    <promociones> </promociones>
</template>
<template v-if="menu==3">
    <eventos> </eventos>
</template>

<!--Explorar-->


<!-- /.card -->

@endsection