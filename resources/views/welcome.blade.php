<!DOCTYPE html>
<html lang="en">
    @include('layout.head')
    <body>
        @include('layout.navbar')
        @include('partials.banner')
        @include('partials.vision')
        @include('partials.values')
        @include('partials.about')
        @include('partials.companies')
        @include('partials.products')
        @include('partials.story')
        @include('partials.leadership')
        @include('partials.quality')
        @include('partials.health')
        @include('partials.gallery')
        @include('partials.group_organization_chart')
        @include('partials.projects_organization_chart')
        @include('partials.clientele')
        @include('partials.contact')
        <div class="container-fluid">
            @include('layout.footer')
        </div>
        @include('layout.scripts')
    </body>
</html>
