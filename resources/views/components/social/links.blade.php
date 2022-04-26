<div class="d-flex justify-content-between mt-4">
    <a href="https://www.facebook.com/sharer/sharer.php?u={{ $url }}" target="_blank" class="social-share"><i class="fab fa-facebook-f text-primary"></i></a>
    <a href="https://twitter.com/intent/tweet?url={{ $url }}text={{ $post->title() }}" target="_blank" class="social-share"><i class="fab fa-twitter text-blue-500"></i></a>
    <a href="https://wa.me/?text={{ $post->title() }} {{ $url }}" target="_blank" class="social-share"><i class="fab fa-whatsapp text-success"></i></a>
    <a href="https://telegram.me/share/url?url={{ $url }}&text={{ $post->title() }}" target="_blank" class="social-share"><i class="fab fa-telegram text-blue-700"></i></a>
</div>
