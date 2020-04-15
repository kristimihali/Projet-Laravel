</div>
<hr>
<!-- Footer -->
<footer>
    <div class="container text-center newsletters">
        <form method="post" action="{{ route('newsletters.new') }}" novalidate>
            {{ csrf_field() }}

            @if(session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
            @elseif(session()->has('error_message') && session()->get('error_message') != '')
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
            @endif

            <p>Signup for our weekly newsletter to get the latest news, updates and amazing offers delivered directly in your inbox.</p>
                <div class="input-group">
                    <input type="email" class="form-control" placeholder="Enter your email" name="email" required data-validation-required-message="Please enter your email.">
                    <p class="help-block text-danger">{{ $errors->first('email') }}</p>
                    <input type="submit" class="btn btn-primary" value="Subscribe">
                </div>
        </form>
    </div>
    <hr/>
    <div class="col-lg-8 col-md-10 mx-auto">
        <p class="copyright text-muted">Projet - Florian @2020</p>
    </div>
</footer>
<script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
