<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>New Contact Request — VexSonic</title>
</head>
<body style="margin:0;padding:0;background-color:#0a0f1a;font-family:'Segoe UI',Arial,sans-serif;">

  <table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#0a0f1a;padding:40px 20px;">
    <tr>
      <td align="center">
        <table width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px;width:100%;">

          <!-- ── HEADER ── -->
          <tr>
            <td align="center" style="background:linear-gradient(135deg,#1a1a2e 0%,#16213e 50%,#0f3460 100%);border-radius:20px 20px 0 0;padding:48px 40px 40px;position:relative;">
              <!-- Top accent line -->
              <div style="position:absolute;top:0;left:0;right:0;height:4px;background:linear-gradient(90deg,#e11d48,#f59e0b,#e11d48);border-radius:20px 20px 0 0;"></div>
              <!-- Logo -->
              <div style="margin-bottom:20px;">
                <span style="font-size:36px;font-weight:900;letter-spacing:-1px;">
                  <span style="color:#e11d48;">vex</span><span style="color:#f59e0b;">sonic</span>
                </span>
                <div style="color:#94a3b8;font-size:10px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-top:4px;">
                  INNOVATIVE SOFTWARE SOLUTIONS
                </div>
              </div>
              <!-- Title -->
              <div style="display:inline-block;background:rgba(225,29,72,0.15);border:1px solid rgba(225,29,72,0.35);color:#f87171;padding:8px 20px;border-radius:100px;font-size:13px;font-weight:700;letter-spacing:1px;margin-bottom:20px;">
                🔔 &nbsp;NEW CONTACT REQUEST
              </div>
              <h1 style="margin:0;color:#ffffff;font-size:26px;font-weight:800;line-height:1.3;">
                Someone Wants to Work With You!
              </h1>
              <p style="margin:12px 0 0;color:#94a3b8;font-size:15px;line-height:1.6;">
                A new message has been submitted through the VexSonic website contact form.
              </p>
            </td>
          </tr>

          <!-- ── BODY ── -->
          <tr>
            <td style="background:#0d1829;padding:40px;border-left:1px solid rgba(255,255,255,0.06);border-right:1px solid rgba(255,255,255,0.06);">

              <!-- Client Details Heading -->
              <p style="margin:0 0 24px;color:#64748b;font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;">
                CLIENT DETAILS
              </p>

              <!-- Name -->
              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:16px;">
                <tr>
                  <td style="background:#0f2133;border:1px solid rgba(255,255,255,0.08);border-radius:12px;padding:16px 20px;">
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="40">
                          <div style="width:38px;height:38px;background:rgba(225,29,72,0.15);border:1px solid rgba(225,29,72,0.3);border-radius:10px;text-align:center;line-height:38px;font-size:18px;">
                            👤
                          </div>
                        </td>
                        <td style="padding-left:14px;">
                          <div style="color:#64748b;font-size:11px;font-weight:600;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:3px;">Full Name</div>
                          <div style="color:#f1f5f9;font-size:16px;font-weight:700;">{{ $clientName }}</div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Email -->
              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:16px;">
                <tr>
                  <td style="background:#0f2133;border:1px solid rgba(255,255,255,0.08);border-radius:12px;padding:16px 20px;">
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="40">
                          <div style="width:38px;height:38px;background:rgba(245,158,11,0.15);border:1px solid rgba(245,158,11,0.3);border-radius:10px;text-align:center;line-height:38px;font-size:18px;">
                            📧
                          </div>
                        </td>
                        <td style="padding-left:14px;">
                          <div style="color:#64748b;font-size:11px;font-weight:600;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:3px;">Email Address</div>
                          <div style="font-size:16px;font-weight:700;">
                            <a href="mailto:{{ $clientEmail }}" style="color:#f59e0b;text-decoration:none;">{{ $clientEmail }}</a>
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Service -->
              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:16px;">
                <tr>
                  <td style="background:#0f2133;border:1px solid rgba(255,255,255,0.08);border-radius:12px;padding:16px 20px;">
                    <table width="100%" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="40">
                          <div style="width:38px;height:38px;background:rgba(16,185,129,0.15);border:1px solid rgba(16,185,129,0.3);border-radius:10px;text-align:center;line-height:38px;font-size:18px;">
                            🛠️
                          </div>
                        </td>
                        <td style="padding-left:14px;">
                          <div style="color:#64748b;font-size:11px;font-weight:600;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:3px;">Service Needed</div>
                          <div style="color:#f1f5f9;font-size:16px;font-weight:700;">
                            @if($clientService)
                              <span style="background:rgba(16,185,129,0.15);border:1px solid rgba(16,185,129,0.3);color:#34d399;padding:4px 14px;border-radius:100px;font-size:13px;">
                                {{ $clientService }}
                              </span>
                            @else
                              <span style="color:#64748b;">Not specified</span>
                            @endif
                          </div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>

              <!-- Message -->
              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:32px;">
                <tr>
                  <td style="background:#0f2133;border:1px solid rgba(255,255,255,0.08);border-radius:12px;padding:20px;">
                    <div style="display:flex;align-items:center;margin-bottom:12px;">
                      <span style="font-size:18px;margin-right:10px;">💬</span>
                      <span style="color:#64748b;font-size:11px;font-weight:600;letter-spacing:0.5px;text-transform:uppercase;">Project Details</span>
                    </div>
                    <div style="color:#cbd5e1;font-size:15px;line-height:1.75;background:rgba(0,0,0,0.2);border-radius:8px;padding:16px;border-left:3px solid #e11d48;">
                      @if($clientMessage)
                        {{ $clientMessage }}
                      @else
                        <span style="color:#475569;font-style:italic;">No message provided.</span>
                      @endif
                    </div>
                  </td>
                </tr>
              </table>

              <!-- CTA Button -->
              <table width="100%" cellpadding="0" cellspacing="0" border="0" style="margin-bottom:28px;">
                <tr>
                  <td align="center">
                    <a href="mailto:{{ $clientEmail }}" style="display:inline-block;background:linear-gradient(135deg,#e11d48,#f59e0b);color:#ffffff;text-decoration:none;padding:16px 40px;border-radius:12px;font-size:16px;font-weight:700;letter-spacing:0.5px;">
                      ✉️ &nbsp; Reply to {{ $clientName }}
                    </a>
                  </td>
                </tr>
              </table>

              <!-- Divider -->
              <div style="border-top:1px solid rgba(255,255,255,0.07);margin:0 0 24px;"></div>

              <!-- Timestamp -->
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <span style="color:#475569;font-size:12px;">⏰ &nbsp;Submitted at: <strong style="color:#64748b;">{{ $submittedAt }}</strong></span>
                  </td>
                  <td align="right">
                    <span style="color:#475569;font-size:12px;">🌐 &nbsp;VexSonic Website</span>
                  </td>
                </tr>
              </table>

            </td>
          </tr>

          <!-- ── FOOTER ── -->
          <tr>
            <td style="background:#080d18;border-radius:0 0 20px 20px;padding:28px 40px;border:1px solid rgba(255,255,255,0.06);border-top:none;text-align:center;">
              <div style="margin-bottom:14px;">
                <span style="font-size:22px;font-weight:900;">
                  <span style="color:#e11d48;">vex</span><span style="color:#f59e0b;">sonic</span>
                </span>
              </div>
              <p style="margin:0 0 6px;color:#475569;font-size:12px;">
                This email was sent automatically from the VexSonic contact form.
              </p>
              <p style="margin:0;color:#334155;font-size:11px;">
                © {{ date('Y') }} VexSonic. All rights reserved. &nbsp;|&nbsp; Pakistan — Remote Worldwide
              </p>
            </td>
          </tr>

        </table>
      </td>
    </tr>
  </table>

</body>
</html>
