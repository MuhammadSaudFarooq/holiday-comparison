@extends('layouts.app-master')

@section('content')
    @include('layouts.partials.hero-section')
    <div class="shape_mainsec">
        @include('layouts.partials.flight-filter')

        <section class="contact-form-sec">
            <div class="container">
                <div class="head_one">
                    <h2>Send Us a Message</h2>
                </div>

                <div class="row">
                    <div class="col-md-8">
                        <div class="contactform">
                            <form action="#">
                                <div class="box">
                                    <div class="input-field">
                                        <input type="text" placeholder="First name" required>
                                    </div>
                                    <div class="input-field">
                                        <input type="text" placeholder="Last name" required>
                                    </div>
                                </div>

                                <div class="box">
                                    <div class="input-field">
                                        <input type="email" placeholder="Email" required>
                                    </div>
                                    <div class="input-field">
                                        <input type="number" placeholder="Phone" required>
                                    </div>
                                </div>

                                <textarea name="Message" placeholder="Message"></textarea>

                                <button type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="contact_info">
                            <h3>Contact Info:</h3>

                            <div class="cont_box">
                                <div class="icon">
                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="23" cy="23" r="23" fill="#71C349" fill-opacity="0.6" />
                                        <circle cx="23.3409" cy="23.3409" r="19.3409" fill="#71C349" />
                                        <path d="M14.666 15.9167H31.3327V30.0834H14.666V15.9167Z" stroke="white"
                                            stroke-width="1.3" stroke-linejoin="round" />
                                        <path d="M14.666 18.8333L22.9993 22.9999L31.3327 18.8333" stroke="white"
                                            stroke-width="1.3" />
                                    </svg>
                                </div>
                                <div class="icontext">
                                    <h4>Email Address</h4>
                                    <a href="mailto:Info@holidaycomparison.com"> Info@holidaycomparison.com</a>
                                </div>
                            </div>

                            <div class="cont_box">
                                <div class="icon">
                                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="23" cy="23" r="23" fill="#71C349" fill-opacity="0.6" />
                                        <circle cx="23.3409" cy="23.3409" r="19.3409" fill="#71C349" />
                                        <g clip-path="url(#clip0_2_5601)">
                                            <path
                                                d="M20.0007 20L20.3842 20.4115L20.6922 20.1244L20.5035 19.7479L20.0007 20ZM17.7449 15.5L18.2478 15.2479C18.1713 15.0954 18.0297 14.9858 17.8629 14.95C17.696 14.9142 17.5219 14.9561 17.3896 15.0639L17.7449 15.5ZM26.0004 26.0001L26.2525 25.4972L25.8761 25.3085L25.589 25.6165L26.0004 26.0001ZM30.5004 28.2559L30.9366 28.6111C31.0443 28.4788 31.0863 28.3048 31.0505 28.1379C31.0147 27.9711 30.9051 27.8295 30.7525 27.753L30.5004 28.2559ZM15.0152 19.7895C15.2339 20.8735 15.5984 21.9432 16.3406 23.2367L17.3164 22.6769C16.6359 21.4908 16.3134 20.5356 16.118 19.5672L15.0152 19.7895ZM17.212 23.3683L20.3842 20.4115L19.6171 19.5885L16.4449 22.5454L17.212 23.3683ZM20.5035 19.7479L18.2478 15.2479L17.2421 15.7521L19.4978 20.2521L20.5035 19.7479ZM17.3896 15.0639C16.2555 15.9879 14.5531 17.4958 15.0152 19.7895L16.118 19.5672C15.8031 18.0042 16.9121 16.9041 18.1002 15.9361L17.3896 15.0639ZM16.3406 23.2367C17.0875 24.5386 18.0445 25.7713 19.1375 26.8635L19.933 26.068C18.9055 25.0412 18.0105 23.8868 17.3164 22.6769L16.3406 23.2367ZM26.4333 29.8828C25.4649 29.6873 24.5097 29.3649 23.3236 28.6844L22.7637 29.6602C24.0573 30.4024 25.1268 30.7668 26.2107 30.9856L26.4333 29.8828ZM23.4552 29.5558L26.412 26.3836L25.589 25.6165L22.6322 28.7888L23.4552 29.5558ZM25.7484 26.503L30.2484 28.7587L30.7525 27.753L26.2525 25.4972L25.7484 26.503ZM30.0644 27.9006C29.0964 29.0887 27.9963 30.1976 26.4333 29.8828L26.2107 30.9856C28.5045 31.4476 30.0126 29.7453 30.9366 28.6111L30.0644 27.9006ZM23.3236 28.6844C22.1137 27.9903 20.9598 27.0955 19.933 26.068L19.1375 26.8635C20.2297 27.9565 21.4618 28.9132 22.7637 29.6602L23.3236 28.6844Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2_5601">
                                                <rect width="18" height="18" fill="white"
                                                    transform="translate(14 14)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="icontext">
                                    <h4>Phone Number</h4>
                                    <a href="tel:000-0000-000"> 000-0000-000</a>
                                </div>
                            </div>



                            <div class="foot_social">
                                <h3>Follow US:</h3>
                                <ul>
                                    <li>
                                        <a href="https://www.facebook.com/" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 320 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.instagram.com/" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://www.twitter.com/" target="_blank">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z" />
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="map">
            <div class="container">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12606.544290310016!2d144.9625870540623!3d-37.821992455188095!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b1b46283b9%3A0x33718f02306f1e54!2sNational%20Gallery%20of%20Victoria!5e0!3m2!1sen!2s!4v1696368565667!5m2!1sen!2s"
                    width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>

    </div>
@endsection
