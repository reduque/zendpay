@extends('layouts.front')

@section('title','Categories')

@section('css')
@endsection


@section('content')
<section class="internas">
    <div class="cont_int">
        <h1>Privacy and Security</h1>
        <h2>SECURITY:</h2>
        <p>Information collected and/or retrieved by LTOD website is encrypted via a Secure Socket Layer (SSL) connection to protect your information from unauthorized parties. The LTOD servers are located in a secure facility with strict security protocols in place to ensure your privacy is protected.</p>
        <h2>MEDICAL RECORD PRIVACY:</h2>
        <p>Only physicians and LTOD’s staff members will have access to your personal health information (PHI). LTOD will not forward results to your physician or other agencies unless required by state law to do so.</p>
        <h2>OTHER INFORMATION:</h2>
        <p>LTOD collects anonymous information about visitors to our website. Information collected includes IP addresses, referring website, duration of stay, time/date, etc. This information is used for site statistics only and may be shared with third parties for marketing purposes only.</p>
        <h2>EXTERNAL LINK:</h2>
        <p>The LTOD website contains links to other websites and LTOD is not responsible for the content on these external sites.</p>
        <h2>CHANGES TO THE SECURITY / PRIVACY POLICY:</h2>
        <p>LTOD reserves the right to make changes to the Privacy and Security policy at any time.  </p>
    </div>
    @include('partials.aside')
</section>
@endsection

@section('javascript')
@endsection
