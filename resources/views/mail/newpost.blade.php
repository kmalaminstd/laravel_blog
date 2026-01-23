<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Post Alert</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f4f7f9; font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td style="padding: 20px 0 30px 0;">
                <table align="center" border="0" cellpadding="0" cellspacing="0" width="600" style="border-collapse: collapse; background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
                    
                    <tr>
                        <td align="center" style="padding: 30px 0; background-color: #ffffff;">
                            <table border="0" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td style="background-color: #2563eb; padding: 8px; border-radius: 8px;">
                                        <img src="https://cdn-icons-png.flaticon.com/512/2593/2593549.png" alt="Logo" width="24" height="24" style="display: block; filter: invert(1);">
                                    </td>
                                    <td style="padding-left: 10px; font-size: 20px; font-weight: bold; color: #1f2937;">
                                        BlogHub
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="New Post" width="600" style="display: block; width: 100%; max-width: 600px; height: auto;">
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 40px 30px 40px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="color: #2563eb; font-size: 12px; font-weight: bold; text-transform: uppercase; letter-spacing: 1px; padding-bottom: 10px;">
                                        New Story Published
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #111827; font-size: 28px; font-weight: 800; line-height: 36px; padding-bottom: 20px;">
                                        {{ $post->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <td style="color: #4b5563; font-size: 16px; font-weight: 400; line-height: 24px; padding-bottom: 30px;">
                                        {{ Str::words(strip_tags($post->description), 40, '...') }}
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="center" style="border-radius: 12px; background-color: #2563eb;">
                                                    <a href="{{ url('/blog/' . $post->id) }}" target="_blank" style="padding: 14px 30px; font-size: 16px; font-weight: bold; color: #ffffff; text-decoration: none; display: inline-block;">Read Full Story</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 0 30px 30px 30px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="border-top: 1px solid #f3f4f6; padding-top: 20px;">
                                <tr>
                                    <td width="40">
                                        <img src="{{ $post->user->logo ? asset('storage/' . $post->user->logo) : asset('images/user.png') }}" alt="Author" width="40" height="40" style="border-radius: 20px; display: block;">
                                    </td>
                                    <td style="padding-left: 12px; color: #6b7280; font-size: 14px;">
                                        By <strong>{{ $post->user->name }}</strong>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td align="center" style="padding-bottom: 40px; color: #9ca3af; font-size: 12px;">
                <p style="margin: 0;">&copy; 2026 BlogHub Platform. All rights reserved.</p>
                <p style="margin: 10px 0 0 0;">
                    <a href="#" style="color: #9ca3af; text-decoration: underline;">Unsubscribe</a> from these alerts.
                </p>
            </td>
        </tr>
    </table>
</body>
</html>