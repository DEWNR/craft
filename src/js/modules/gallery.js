import GLightbox from 'glightbox';

export function initGallery(element) {
  // App.mount(element);
  const lightbox = GLightbox({
    touchNavigation: true,
    loop: true,
    autoplayVideos: true
  });
  console.log('dd');
}
