<!DOCTYPE html>
<html>

<head>
    <title>Sample PDF HTML</title>
    <style>
    ul {
        margin-top: 3px;
    }

    li {
        margin: 0px !important;
    }

    .bordered-table {
        border-collapse: collapse;
        border: 1px solid #0000001a;
    }

    .bordered-table td {
        border: none;
    }
    </style>
</head>

<body>

    <table class="bordered-table" style="width:100%;">
        <tr>
            <td colspan="2">
                <ul style="text-align:center; margin-top: 50px;">
                    <li style="display:inline-block;list-style:none;line-height:28px;vertical-align:middle;"><img
                            class="" src="{{ asset('assets/images/logo.png')}}" alt="logo.png"
                            style="display: inline-block; object-fit: cover; width: 65px;"></li>
                    <li
                        style="display:inline-block;list-style:none;font-size: 24px; font-weight: bold;line-height:28px;vertical-align:middle;">
                        Lions Clubs International <br>District 318A 2022-23
                    </li>
                </ul>
            </td>

        </tr>
        <tr>
            <td colspan="2">
                <ul style="text-align:center;margin-bottom: 40px;
">
                    <li
                        style="display:inline-block;list-style:none;font-size: 20px; font-weight: bold;display:block;text-decoration: underline">
                        NO DUE CERTIFICATE
                    </li>
                </ul>

            </td>

        </tr>
        <tr>
            <td style="padding-top: 30px;">
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        Serial </li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">
                        {{ $noduesCertificate->serial ?? '' }} </li>
                </ul>
            </td>
                @php
                $formattedDate = $noduesCertificate->created_at->format('d-m-Y');
                @endphp
            <td style="padding-top: 30px;">
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        Date </li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">{{ $formattedDate ?? '' }}
                    </li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        Club </li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">
                        {{ $noduesCertificate->member->club->name ?? '' }}</li>
                </ul>
            </td>
            <td>
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        ClubId </li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">
                        {{ $noduesCertificate->member->clubid ?? '' }}</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        Member </li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">
                        {{ $noduesCertificate->member->name ?? '' }}</li>
                </ul>
            </td>
            <td>
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        Member Id</li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">
                        {{ $noduesCertificate->member_id ?? '' }}</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        Mobile</li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">
                        {{ $noduesCertificate->member->mobile ?? '' }}</li>
                </ul>
            </td>
            <td>
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        Email Id</li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">
                        {{ $noduesCertificate->member->email ?? '' }}</li>
                </ul>
            </td>
        </tr>
        <tr>
            <td>
                <ul style="">
                    <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                        Address</li>
                    <li style="font-weight: normal; display: inline-block; list-style:none">
                        {{ $noduesCertificate->member->address ?? '' }}</li>
                </ul>
            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>

            <td style="text-align:right;font-weight: bold;padding-right: 15px;">
                <lable style="font-size: 16px;list-style:none;margin-top:30px;"><br><br><br>MJF Lion Suresh Kumar S <br> <span
                        style="font-size: 18px;list-style:none"> District Cabinet Treasurer</span><br><br><br></label>
            </td>
        </tr>
    </table>
</body>

</html>