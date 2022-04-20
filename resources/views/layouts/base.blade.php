<!DOCTYPE html>
<html lang="en">
<head>
    <x-partials.head></x-partials.head>
</head>
<body>
<div class="topbar-container fixed-top">
    <x-partials.navbar></x-partials.navbar>
</div>


{{ $slot }}


<!-- Footer -->
<x-partials.footer></x-partials.footer>
<!-- Footer -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('js/custom.js') }}"></script>
<script src="{{ asset('js/front.js') }}"></script>
</body>
</html>
