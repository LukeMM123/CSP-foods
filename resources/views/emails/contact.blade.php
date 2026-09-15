<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>New Website Enquiry</title>
</head>

<body style="margin: 0; padding: 0; background: #f3f3f1; font-family: Arial, Helvetica, sans-serif;">

    <div style="padding: 40px 20px;">

        <div style="max-width: 650px; margin: 0 auto; background: #ffffff;">

            <div style="background: #071827; padding: 32px;">
                <h1 style="margin: 0; color: #ffffff; font-size: 24px;">
                    New Website Enquiry
                </h1>

                <p style="margin: 8px 0 0; color: #9ca3af;">
                    CSP Food Services
                </p>
            </div>

            <div style="padding: 32px;">

                <p style="margin: 0 0 8px; color: #6b7280; font-size: 13px;">
                    NAME
                </p>

                <p style="margin: 0 0 24px; color: #111827; font-size: 16px;">
                    {{ $data['first_name'] }} {{ $data['last_name'] }}
                </p>


                <p style="margin: 0 0 8px; color: #6b7280; font-size: 13px;">
                    EMAIL
                </p>

                <p style="margin: 0 0 24px; color: #111827; font-size: 16px;">
                    {{ $data['email'] }}
                </p>


                @if (!empty($data['telephone']))
                    <p style="margin: 0 0 8px; color: #6b7280; font-size: 13px;">
                        TELEPHONE
                    </p>

                    <p style="margin: 0 0 24px; color: #111827; font-size: 16px;">
                        {{ $data['telephone'] }}
                    </p>
                @endif


                <p style="margin: 0 0 8px; color: #6b7280; font-size: 13px;">
                    MESSAGE
                </p>

                <div style="color: #111827; font-size: 16px; line-height: 1.7;">
                    {!! nl2br(e($data['comments'])) !!}
                </div>

            </div>

        </div>

    </div>

</body>
</html>