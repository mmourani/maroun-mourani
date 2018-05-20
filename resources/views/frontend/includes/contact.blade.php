    <!-- contact -->
    <div class="contact" id="contact">
        <div class="container">
            <h3 class="heading">Contact Me</h3>
            <div class="col-md-4 address">
                <h3>Address</h3>
                <div class="mail-agileits-w3layouts">
                    <i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
                    <div class="contact-right">
                        <p>Phone</p><span>+971-50-668-2769</span>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="mail-agileits-w3layouts">
                    <i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
                    <div class="contact-right">
                        <p>Email</p><a href="mailto:info@mouraniconsulting.com">info@mouraniconsulting.com</a>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="mail-agileits-w3layouts">
                    <i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
                    <div class="contact-right">
                        <p>Address</p><span>Bay Square, Business Bay </span> 
                        <p><span>Dubai, UAE</span></p>
                    </div>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>

            <div class="col-md-4 form">
                {{ html()->form('POST', route('frontend.contact.send'))->open() }}
                    <div class="fields-grid">
                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.name'))->for('name') }}

                                {{ html()->text('name')
                                    ->class('form-control')
                                    ->attribute('maxlength', 191)
                                    ->required()
                                    ->autofocus() }}
                            <span></span>
                            </div><!--form-group-->

                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                {{ html()->email('email')
                                    ->class('form-control')
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            <span></span>
                            </div><!--form-group-->

                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.phone'))->for('phone') }}

                                {{ html()->text('phone')
                                    ->class('form-control')
                                    ->attribute('maxlength', 191)
                                    ->required() }}
                            <span></span>
                            </div><!--form-group-->

                            <div class="form-group">
                                {{ html()->label(__('validation.attributes.frontend.message'))->for('message') }}

                                {{ html()->textarea('message')
                                    ->class('form-control')
                                    ->attribute('rows', 3) }}
                                <span></span>
                            </div><!--form-group-->
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group mb-0 clearfix">
                                {{ form_submit(__('labels.frontend.contact.button')) }}
                            </div><!--form-group-->
                        </div><!--col-->
                    </div><!--row-->
                    {{ html()->form()->close() }}
            </div>

            <div class="col-md-4 map">
                <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJx_06TzNoXz4R1peycGYLoCk&key=AIzaSyAJX0kITZRzwsP0LGnVNblhVUCVuBmdF8g" allowfullscreen></iframe>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!-- //contact -->