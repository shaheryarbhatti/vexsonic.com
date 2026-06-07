<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>We Received Your Message — VexSonic</title>
</head>
<body style="margin:0;padding:0;background-color:#0a0f1a;font-family:'Segoe UI',Arial,sans-serif;">

<table width="100%" cellpadding="0" cellspacing="0" border="0" style="background-color:#0a0f1a;padding:40px 20px;">
  <tr>
    <td align="center">
      <table width="600" cellpadding="0" cellspacing="0" border="0" style="max-width:600px;width:100%;">

        <!-- ── HERO HEADER ── -->
        <tr>
          <td style="background:linear-gradient(135deg,#0f0c29 0%,#302b63 50%,#24243e 100%);border-radius:20px 20px 0 0;padding:0;overflow:hidden;">
            <!-- Accent bar -->
            <div style="height:4px;background:linear-gradient(90deg,#e11d48,#f59e0b,#8b5cf6,#06b6d4);"></div>
            <div style="padding:48px 40px 44px;text-align:center;">
              <!-- Logo -->
              <div style="margin-bottom:24px;">
                <span style="font-size:40px;font-weight:900;letter-spacing:-1px;">
                  <span style="color:#e11d48;">vex</span><span style="color:#f59e0b;">sonic</span>
                </span>
                <div style="color:#94a3b8;font-size:10px;font-weight:700;letter-spacing:3px;text-transform:uppercase;margin-top:5px;">
                  INNOVATIVE SOFTWARE SOLUTIONS
                </div>
              </div>
              <!-- Check icon circle -->
              <table cellpadding="0" cellspacing="0" border="0" style="margin:0 auto 20px;">
                <tr>
                  <td width="72" height="72" align="center" valign="middle" style="width:72px;height:72px;background:linear-gradient(135deg,#16a34a,#22c55e);border-radius:50%;box-shadow:0 8px 32px rgba(34,197,94,0.4);text-align:center;vertical-align:middle;">
                    <span style="color:#ffffff;font-size:36px;font-weight:900;line-height:1;display:block;text-align:center;">&#10003;</span>
                  </td>
                </tr>
              </table>
              <h1 style="margin:0 0 12px;color:#ffffff;font-size:28px;font-weight:800;line-height:1.3;">
                Message Received!
              </h1>
              <p style="margin:0;color:#94a3b8;font-size:16px;line-height:1.7;max-width:420px;margin:0 auto;">
                Thank you <strong style="color:#fff;">{{ $clientName }}</strong>! We've received your request and our team will get back to you within <strong style="color:#f59e0b;">24 hours</strong>.
              </p>
            </div>
          </td>
        </tr>

        <!-- ── WHAT HAPPENS NEXT ── -->
        <tr>
          <td style="background:#0d1829;padding:40px;border-left:1px solid rgba(255,255,255,0.06);border-right:1px solid rgba(255,255,255,0.06);">

            <!-- Submission summary -->
            <p style="margin:0 0 20px;color:#64748b;font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;">
              YOUR SUBMISSION SUMMARY
            </p>

            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:32px;">
              <!-- Service -->
              <tr>
                <td style="padding-bottom:12px;">
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="background:#0f2133;border:1px solid rgba(255,255,255,0.07);border-radius:12px;padding:14px 18px;">
                        <table cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="34">
                              <div style="width:32px;height:32px;background:rgba(139,92,246,0.2);border-radius:8px;text-align:center;line-height:32px;font-size:15px;">🛠️</div>
                            </td>
                            <td style="padding-left:12px;">
                              <div style="color:#64748b;font-size:10px;font-weight:700;letter-spacing:0.5px;text-transform:uppercase;">Service Requested</div>
                              <div style="color:#f1f5f9;font-size:14px;font-weight:700;margin-top:2px;">
                                @if($clientService && $clientService !== 'Not specified')
                                  <span style="background:rgba(139,92,246,0.15);border:1px solid rgba(139,92,246,0.3);color:#a78bfa;padding:3px 12px;border-radius:100px;font-size:12px;">{{ $clientService }}</span>
                                @else
                                  <span style="color:#475569;">Not specified</span>
                                @endif
                              </div>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- Phone -->
              <tr>
                <td style="padding-bottom:12px;">
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="background:#0f2133;border:1px solid rgba(255,255,255,0.07);border-radius:12px;padding:14px 18px;">
                        <table cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="34">
                              <div style="width:32px;height:32px;background:rgba(16,185,129,0.2);border-radius:8px;text-align:center;line-height:32px;font-size:15px;">📞</div>
                            </td>
                            <td style="padding-left:12px;">
                              <div style="color:#64748b;font-size:10px;font-weight:700;letter-spacing:0.5px;text-transform:uppercase;">Phone Number</div>
                              <div style="font-size:14px;font-weight:700;margin-top:2px;">
                                <a href="tel:{{ $clientPhone }}" style="color:#34d399;text-decoration:none;">{{ $clientPhone }}</a>
                              </div>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              <!-- Message preview -->
              @if($clientMessage)
              <tr>
                <td style="padding-bottom:12px;">
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="background:#0f2133;border:1px solid rgba(255,255,255,0.07);border-radius:12px;padding:14px 18px;">
                        <div style="color:#64748b;font-size:10px;font-weight:700;letter-spacing:0.5px;text-transform:uppercase;margin-bottom:8px;">💬 &nbsp;Your Message</div>
                        <div style="color:#94a3b8;font-size:13px;line-height:1.6;background:rgba(0,0,0,0.15);padding:12px 14px;border-radius:8px;border-left:3px solid #8b5cf6;">{{ $clientMessage }}</div>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
              @endif
              <!-- Submitted at -->
              <tr>
                <td>
                  <table width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                      <td style="background:#0f2133;border:1px solid rgba(255,255,255,0.07);border-radius:12px;padding:14px 18px;">
                        <table cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="34">
                              <div style="width:32px;height:32px;background:rgba(6,182,212,0.15);border-radius:8px;text-align:center;line-height:32px;font-size:15px;">⏰</div>
                            </td>
                            <td style="padding-left:12px;">
                              <div style="color:#64748b;font-size:10px;font-weight:700;letter-spacing:0.5px;text-transform:uppercase;">Submitted At</div>
                              <div style="color:#f1f5f9;font-size:14px;font-weight:600;margin-top:2px;">{{ $submittedAt }}</div>
                            </td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>

            <!-- What happens next -->
            <div style="background:linear-gradient(135deg,rgba(225,29,72,0.06),rgba(245,158,11,0.06));border:1px solid rgba(245,158,11,0.15);border-radius:14px;padding:24px;margin-bottom:32px;">
              <p style="margin:0 0 16px;color:#f59e0b;font-size:11px;font-weight:700;letter-spacing:2px;text-transform:uppercase;">
                ⚡ WHAT HAPPENS NEXT
              </p>
              <table cellpadding="0" cellspacing="0" width="100%">
                <tr>
                  <td style="padding-bottom:14px;">
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="32" valign="top">
                          <div style="width:26px;height:26px;background:rgba(225,29,72,0.2);border:1px solid rgba(225,29,72,0.4);border-radius:50%;text-align:center;line-height:26px;color:#f87171;font-size:12px;font-weight:800;">1</div>
                        </td>
                        <td style="padding-left:12px;">
                          <div style="color:#e2e8f0;font-size:14px;font-weight:600;">Review Your Request</div>
                          <div style="color:#64748b;font-size:12px;margin-top:2px;">Our team reviews your project details carefully.</div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td style="padding-bottom:14px;">
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="32" valign="top">
                          <div style="width:26px;height:26px;background:rgba(245,158,11,0.2);border:1px solid rgba(245,158,11,0.4);border-radius:50%;text-align:center;line-height:26px;color:#fbbf24;font-size:12px;font-weight:800;">2</div>
                        </td>
                        <td style="padding-left:12px;">
                          <div style="color:#e2e8f0;font-size:14px;font-weight:600;">We'll Reach Out Within 24 Hours</div>
                          <div style="color:#64748b;font-size:12px;margin-top:2px;">A team member will contact you to discuss your project.</div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
                <tr>
                  <td>
                    <table cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="32" valign="top">
                          <div style="width:26px;height:26px;background:rgba(34,197,94,0.2);border:1px solid rgba(34,197,94,0.4);border-radius:50%;text-align:center;line-height:26px;color:#4ade80;font-size:12px;font-weight:800;">3</div>
                        </td>
                        <td style="padding-left:12px;">
                          <div style="color:#e2e8f0;font-size:14px;font-weight:600;">Free Consultation &amp; Proposal</div>
                          <div style="color:#64748b;font-size:12px;margin-top:2px;">We'll send you a detailed proposal with timeline and pricing.</div>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>

            <!-- CTA Button -->
            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:32px;">
              <tr>
                <td align="center">
                  <a href="https://vexsonic.com" style="display:inline-block;background:linear-gradient(135deg,#e11d48,#f59e0b);color:#ffffff;text-decoration:none;padding:16px 44px;border-radius:12px;font-size:16px;font-weight:700;letter-spacing:0.3px;">
                    🌐 &nbsp; Visit Our Website
                  </a>
                </td>
              </tr>
            </table>

            <!-- Services highlight -->
            <div style="background:rgba(0,0,0,0.2);border-radius:12px;padding:20px;margin-bottom:0;">
              <p style="margin:0 0 14px;color:#475569;font-size:11px;font-weight:700;letter-spacing:1.5px;text-transform:uppercase;text-align:center;">OUR SERVICES</p>
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="33%" align="center" style="padding:0 6px;">
                    <div style="background:#0f2133;border:1px solid rgba(255,255,255,0.07);border-radius:10px;padding:14px 10px;text-align:center;">
                      <div style="font-size:22px;margin-bottom:6px;">🌐</div>
                      <div style="color:#e2e8f0;font-size:12px;font-weight:700;">Web Development</div>
                    </div>
                  </td>
                  <td width="33%" align="center" style="padding:0 6px;">
                    <div style="background:#0f2133;border:1px solid rgba(255,255,255,0.07);border-radius:10px;padding:14px 10px;text-align:center;">
                      <div style="font-size:22px;margin-bottom:6px;">📱</div>
                      <div style="color:#e2e8f0;font-size:12px;font-weight:700;">Mobile Apps</div>
                    </div>
                  </td>
                  <td width="33%" align="center" style="padding:0 6px;">
                    <div style="background:#0f2133;border:1px solid rgba(255,255,255,0.07);border-radius:10px;padding:14px 10px;text-align:center;">
                      <div style="font-size:22px;margin-bottom:6px;">⚙️</div>
                      <div style="color:#e2e8f0;font-size:12px;font-weight:700;">SAP ABAP</div>
                    </div>
                  </td>
                </tr>
              </table>
            </div>

          </td>
        </tr>

        <!-- ── CONTACT STRIP ── -->
        <tr>
          <td style="background:#0a1220;padding:24px 40px;border-left:1px solid rgba(255,255,255,0.06);border-right:1px solid rgba(255,255,255,0.06);">
            <table width="100%" cellpadding="0" cellspacing="0">
              <tr>
                <td align="center">
                  <p style="margin:0 0 10px;color:#475569;font-size:12px;">Need urgent help? Reach us directly:</p>
                  <a href="mailto:support@vexsonic.com" style="color:#f59e0b;text-decoration:none;font-size:14px;font-weight:700;">
                    📧 &nbsp;support@vexsonic.com
                  </a>
                </td>
              </tr>
            </table>
          </td>
        </tr>

        <!-- ── FOOTER ── -->
        <tr>
          <td style="background:#080d18;border-radius:0 0 20px 20px;padding:28px 40px;border:1px solid rgba(255,255,255,0.06);border-top:none;text-align:center;">
            <div style="margin-bottom:12px;">
              <span style="font-size:24px;font-weight:900;">
                <span style="color:#e11d48;">vex</span><span style="color:#f59e0b;">sonic</span>
              </span>
            </div>
            <p style="margin:0 0 6px;color:#475569;font-size:12px;">
              You're receiving this because you submitted a contact form on VexSonic.
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
