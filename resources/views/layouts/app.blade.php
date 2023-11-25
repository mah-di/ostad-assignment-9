<!DOCTYPE html>
    <html lang="en">
        <head>

            @include("components.head")

            @stack("style")

        </head>
        <body>

            @include("components.header")

            @yield("content")

            @include("components.footer")

            @include("components.scripts")

            @stack("script")

        </body>
    </html>
