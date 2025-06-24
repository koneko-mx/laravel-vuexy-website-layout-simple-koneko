<!-- Vendor -->
@yield('vendor-script')

<!-- Page Script -->
@stack('page-script')

<!-- Back to top button -->
<script>
    // Add intersection observer polyfill for older browsers
    document.addEventListener('alpine:init', () => {
        // Custom directive for scroll animations
        Alpine.directive('intersect', (el, { value, expression, modifiers }) => {
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        value(entry.target);
                        if (modifiers.includes('once')) {
                            observer.unobserve(entry.target);
                        }
                    }
                });
            }, {
                root: null,
                threshold: 0.1,
                rootMargin: '0px'
            });

            observer.observe(el);

            return () => {
                observer.unobserve(el);
            };
        });

        // Gallery component
        Alpine.data('gallery', () => ({
            photos: [
                'https://images.unsplash.com/photo-1605276374104-dee2a0ed3cd6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1497217968520-7d8d34bfa9c6?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1602353225887-4486f295dde7?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80',
                'https://images.unsplash.com/photo-1565538810643-b5bdb714032a?ixlib=rb-1.2.1&auto=format&fit=crop&w=800&q=80'
            ],
            current: 0,
            next() {
                this.current = (this.current + 1) % this.photos.length;
            },
            prev() {
                this.current = (this.current - 1 + this.photos.length) % this.photos.length;
            }
        }));

        // Contact form
        Alpine.data('contactForm', () => ({
            name: '',
            email: '',
            phone: '',
            message: '',
            submitted: false,
            loading: false,
            errors: {},

            validate() {
                this.errors = {};

                if (!this.name.trim()) {
                    this.errors.name = 'Name is required';
                }

                if (!this.email.trim()) {
                    this.errors.email = 'Email is required';
                } else if (!/^\S+@\S+\.\S+$/.test(this.email)) {
                    this.errors.email = 'Please enter a valid email';
                }

                if (!this.message.trim()) {
                    this.errors.message = 'Message is required';
                }

                return Object.keys(this.errors).length === 0;
            },

            submit() {
                if (this.validate()) {
                    this.loading = true;

                    // Simulate form submission
                    setTimeout(() => {
                        this.loading = false;
                        this.submitted = true;
                        this.resetForm();
                    }, 1500);
                }
            },

            resetForm() {
                this.name = '';
                this.email = '';
                this.phone = '';
                this.message = '';
            }
        }));
    });
</script>
