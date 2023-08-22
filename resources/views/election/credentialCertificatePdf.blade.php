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
                    style="display:inline-block;list-style:none;font-size: 20px; font-weight: bold;display:block;">
                    CREDENTIALS
                </li>
            </ul>
            <ul style="text-align:center;margin-bottom: 40px;
">
                <li
                    style="display:inline-block;list-style:none;font-size: 20px; font-weight: bold;display:block;">
                    Delegates/Alternate Delegates
                </li>
            </ul>
        </td>
    </tr>
    <tr>
        <td style="padding-top: 30px;">
            <ul style="">
                <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                    Id
                </li>
                <li style="font-weight: normal; display: inline-block; list-style:none">
                    {{ $credentialCertificate->member_id ?? '' }} </li>
            </ul>
        </td>
        @php
            $formattedDate = $credentialCertificate->created_at->format('d-m-Y');
        @endphp
        <td>
            <ul style="">
                <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                    Date
                </li>
                <li style="font-weight: normal; display: inline-block; list-style:none">{{ $formattedDate ?? '' }}
                </li>
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <ul style="">
                <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                    Name
                </li>
                <li style="font-weight: normal; display: inline-block; list-style:none">
                    {{ $credentialCertificate->member->name ?? '' }}</li>
            </ul>
        </td>
        <td>
            <ul style="">
                <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                    Serial
                </li>
                <li style="font-weight: normal; display: inline-block; list-style:none">
                    {{ $credentialCertificate->credentials_serial ?? '' }}</li>
            </ul>
    </tr>
    <tr>
        <td>
            <ul style="">
                <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                    Mobile
                </li>
                <li style="font-weight: normal; display: inline-block; list-style:none">
                    {{ $credentialCertificate->member->mobile ?? '' }}</li>
            </ul>
        </td>
        <td>
            <ul style="">
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <ul style="">
                <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                    Club
                </li>
                <li style="font-weight: normal; display: inline-block; list-style:none">
                    {{ $credentialCertificate->member->club->name ?? '' }}</li>
            </ul>
        </td>
        <td>
            <ul style="">
            </ul>
        </td>
    </tr>
    <tr>
        <td>
            <ul style="">
                <li style="font-weight: bold;display: inline-block;width: 120px;font-size: 16px; list-style:none">
                    Address
                </li>
                <li style="font-weight: normal; display: inline-block; list-style:none">
                    {{ $credentialCertificate->member->address ?? '' }}</li>
            </ul>
        </td>
        <td></td>
    </tr>
    <tr>
        <td style="font-weight: bold;" colspan="2">
            <ul>
                <li style="display: inline-block;width: 30%;font-size: 16px; list-style:none">
                    <label style="font-size: 13px;list-style:none;margin-top:30px"><br><br><br><span
                            style="text-align: center">PMJF Lion Dr.A. Kannan</span><br>
                        <span style="font-weight: bold;font-size: 16px;list-style:none; text-align: center">District Governor</span><br><br><br></label>
                </li>
                <li style="font-weight: bold;display: inline-block;width: 30%;font-size: 16px; list-style:none">
                    <label style="font-size: 13px;list-style:none;margin-top:30px;"><br><br><br><span
                            style="text-align: center">PMJF Lion Thiruchittambalam M</span><br>
                        <span style="font-weight: bold;font-size: 16px;list-style:none; text-align: center">Distrit Cabinet Secretary</span><br><br><br></label>
                </li>
                <li style="font-weight: bold;display: inline-block;width: 30%;font-size: 16px; list-style:none; text-align: right">
                    <label style="font-size: 13px;list-style:none;margin-top:30px;"><br><br><br><span
                            style="text-align: center">MJF Lion Suresh Kumar S</span><br>
                        <span style="font-weight: bold;font-size: 16px;list-style:none; text-align: center">District Cabinet Treasurer</span><br><br><br></label>
                </li>
            </ul>
        </td>
    </tr>

</table>
</body>
</html>
