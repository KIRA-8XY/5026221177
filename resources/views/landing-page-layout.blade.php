<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page Layout</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/landing-page.css') }}" rel="stylesheet">
</head>

<body>
    <a href="{{ url('/') }}">link File UTS</a>

<!-- Testimonial Section -->
<section class="container my-5 testimonial-container">
    <div class="text-center">
        <h2 class="mb-4">OUR CLIENTS LOVE US!</h2>
    </div>

    <div class="row justify-content-center">
        <!-- First Row of Testimonials -->
        <div class="col-md-5 mb-4">
            <div class="testimonial">
                <img src="{{ asset('images/kenji2.jpg') }}" class="rounded-circle me-3" alt="Client 1">
                <div>
                    <blockquote class="blockquote" style="font-family: 'Georgia', serif;">
                        <p>"Optimedia Relations has truly transformed our global media presence. Their innovative strategies and proactive approach have strengthened our brand's voice and led to significant growth in positive media coverage. The team’s dedication and responsiveness make them an invaluable partner. We are excited to continue this successful collaboration."</p>
                        <footer class="blockquote-footer"><strong>Kenji Yamamoto</strong><br><small>Chief Communications Officer, Sony</small></footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="col-md-5 mb-4">
            <div class="testimonial">
                <img src="{{ asset('images/rachel-headshot-cropped.webp') }}" class="rounded-circle me-3" alt="Client 2">
                <div>
                    <blockquote class="blockquote" style="font-family: 'Georgia', serif;">
                        <p>"The Optimedia Relations team brought a fresh perspective to our PR strategy that revitalized our approach. Their expertise in high-stakes situations and ability to build strong media relationships have made a significant impact. We couldn’t ask for a better media partner; their commitment to excellence shines through in every project."</p>
                        <footer class="blockquote-footer"><strong>Rachel Anderson</strong><br><small>Senior Vice President, AT&T</small></footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <!-- Second Row of Testimonials -->
        <div class="col-md-5">
            <div class="testimonial" style="font-family: 'Georgia', serif;">
                <img src="{{ asset('images/Kenji-sq300-aspect-ratio-380-380.jpeg') }}" class="rounded-circle me-3" alt="Client 3">
                <div>
                    <blockquote class="blockquote">
                        <p>"Thanks to Optimedia Relations, we have built long-lasting media connections that continually amplify our brand story in ways we never imagined. Their creative campaigns have consistently kept us ahead of the competition, showcasing their deep understanding of effective communication. The team’s ability to navigate the media landscape and adapt to our needs has transformed our public relations approach. We are excited about the innovative solutions we can develop together moving forward and are confident that this partnership will yield even greater results."</p>
                        <footer class="blockquote-footer"><strong>Masahiro Takahashi</strong><br><small>Global PR Director, Panasonic</small></footer>
                    </blockquote>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="testimonial" style="font-family: 'Georgia', serif;">
                <img src="{{ asset('images/tony.jpeg') }}" class="rounded-circle me-3" alt="Client 4">
                <div>
                    <blockquote class="blockquote">
                        <p>"Optimedia Relations has been a true game-changer for our communications strategy. Their strategic thinking and adeptness at navigating complex media landscapes have empowered us to tell our story in a way that resonates with global audiences. They have an exceptional ability to anticipate media trends and craft narratives that foster positive dialogue about our brand. The proactive engagement and creative solutions they bring to the table have become essential to our global PR efforts. We greatly value this partnership and look forward to our continued collaboration."</p>
                        <footer class="blockquote-footer"><strong>Li Wei</strong><br><small>Head of International Communications, Huawei</small></footer>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer with Logos -->
<footer class="logos">
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-2">
                <div style="background-color: #eaeaea" class="logo-text"><a href="https://intel.com"><img src="{{ asset('images/sony-logo-icon-png-svg.png') }}" alt="png-transparent-nestle-hd-logo-thumbnail" border="0"></a></div>
            </div>
            <div class="col-2">
                <div class="logo-text"><a href="https://intel.com"><img src="{{ asset('images/atnt.svg') }}" alt="Intel-New-Logo-PNG-VECTOR" border="0"></a></div>
            </div>
            <div class="col-2">
                <div class="logo-text"><a href="https://intel.com"><img src="{{ asset('images/panasonic.png') }}" alt="Panasonic Logo" border="0"></a></div>
            </div>
            <div class="col-2">
                <div class="logo-text"><a href="https://intel.com"><img src="{{ asset('images/Huawei_logo_icon_170010.png') }}" alt="Huawei Logo" border="0"></a></div>
            </div>
            <div class="col-2">
                <div class="logo-text"><a href="https://intel.com"><img src="{{ asset('images/Lenovo.png') }}" alt="Lenovo Logo" border="0"></a></div>
            </div>
            <div class="col-2">
                <div class="logo-text"><a href="https://intel.com"><img src="{{ asset('images/Samsung_Logo.svg.png') }}" alt="Samsung Logo" border="0"></a></div>
            </div>
        </div>
    </div>
</footer>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
