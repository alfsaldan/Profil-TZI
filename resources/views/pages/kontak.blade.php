@extends('layouts.app')
@section('title', 'Contact Us - PT. Teknokrat Zamrud Integrasi')

@section('content')

<!-- HEADER SECTION -->
<section class="section-padding bg-main" style="padding-bottom: 2rem;">
  <div class="container" style="text-align: center;">
    <div class="tag" style="margin-bottom: 1rem; background: #e0f2fe; color: #0284c7;">
      <span class="tag-icon" style="font-size:1.1rem;"><i class="ph ph-phone"></i></span> GET IN TOUCH
    </div>
    <h1 class="text-primary" style="font-size: 2.5rem; margin-bottom: 1rem;">Let's Collaborate</h1>
    <p style="color: var(--text-gray); font-size: 1.1rem; max-width: 600px; margin: 0 auto;">Consult your technology and integration needs with us. Our team is ready to help provide the best solutions.</p>
  </div>
</section>

<!-- CONTACT LAYOUT -->
<section class="section-padding bg-white">
  <div class="container grid-2" style="gap: 4rem;">
    
    <!-- INFO -->
    <div>
      <h2 style="font-size: 2rem; margin-bottom: 1.5rem;">Contact Information</h2>
      <p style="color: var(--text-gray); margin-bottom: 2.5rem;">We are ready to serve you during the operational hours listed below.</p>
      
      <div style="display: flex; flex-direction: column; gap: 1.5rem;">
        <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
          <div style="width: 48px; height: 48px; background: #e0f2fe; color: #0284c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;"><i class="ph ph-map-pin"></i></div>
          <div>
            <h4 style="margin-bottom: 0.25rem;">Office Address</h4>
            <p style="color: var(--text-gray); font-size: 0.95rem;">Jl. Gunung Bendahara No. 16A, Kel. Pematang Kapau, Kec. Kulim, Kota Pekanbaru, Riau 28289</p>
          </div>
        </div>
        
        <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
          <div style="width: 48px; height: 48px; background: #e0f2fe; color: #0284c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;"><i class="ph ph-envelope-simple"></i></div>
          <div>
            <h4 style="margin-bottom: 0.25rem;">Email</h4>
            <p style="color: var(--text-gray); font-size: 0.95rem;"><a href="mailto:teknokratzamrudintegrasi@gmail.com" style="color: var(--primary);">teknokratzamrudintegrasi@gmail.com</a></p>
          </div>
        </div>
        
        <div style="display: flex; gap: 1.5rem; align-items: flex-start;">
          <div style="width: 48px; height: 48px; background: #e0f2fe; color: #0284c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;"><i class="ph ph-whatsapp-logo"></i></div>
          <div>
            <h4 style="margin-bottom: 0.25rem;">Phone / WhatsApp</h4>
            <p style="color: var(--text-gray); font-size: 0.95rem;">
              <a href="tel:+6281371273367" style="color: var(--text-dark);">0813-7127-3367</a><br>
              <a href="tel:+6282383360606" style="color: var(--text-dark);">0823-8336-0606</a>
            </p>
          </div>
        </div>
      </div>
      
      <!-- MAP Placeholder -->
      <div style="margin-top: 3rem; width: 100%; height: 250px; background: var(--bg-main); border-radius: 16px; border: 1px solid var(--border); display: flex; align-items: center; justify-content: center; color: var(--text-light);">
        <i class="ph ph-map-trifold" style="font-size: 2rem; margin-right: 0.5rem;"></i> Interactive Map View
      </div>
    </div>
    
    <!-- FORM -->
    <div class="card" style="border-radius: 20px; box-shadow: var(--shadow-lg); padding: 3rem;">
      <h3 style="font-size: 1.5rem; margin-bottom: 0.5rem;">Send a Message</h3>
      <p style="color: var(--text-gray); margin-bottom: 2rem; font-size: 0.95rem;">Fill out the form below and our team will contact you within 24 working hours.</p>
      
      <form id="contactForm" onsubmit="event.preventDefault(); alert('Message sent successfully!');">
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
          <div>
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; font-weight: 500;">Full Name *</label>
            <input type="text" required placeholder="Your Name" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-family: var(--font-body); font-size: 0.95rem;">
          </div>
          <div>
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; font-weight: 500;">Email *</label>
            <input type="email" required placeholder="email@example.com" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-family: var(--font-body); font-size: 0.95rem;">
          </div>
        </div>
        
        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 1.5rem;">
          <div>
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; font-weight: 500;">Phone Number</label>
            <input type="tel" placeholder="+62 8xx xxxx xxxx" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-family: var(--font-body); font-size: 0.95rem;">
          </div>
          <div>
            <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; font-weight: 500;">Interested Service</label>
            <select style="width: 100%; padding: 0.8rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-family: var(--font-body); font-size: 0.95rem; background: #fff;">
              <option>-- Select Service --</option>
              <option>Electronic Installation</option>
              <option>HVAC Systems</option>
              <option>Interior Design</option>
              <option>IT Infrastructure</option>
              <option>General Inquiry</option>
            </select>
          </div>
        </div>
        
        <div style="margin-bottom: 1.5rem;">
          <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; font-weight: 500;">Company / Institution</label>
          <input type="text" placeholder="Your Company Name" style="width: 100%; padding: 0.8rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-family: var(--font-body); font-size: 0.95rem;">
        </div>
        
        <div style="margin-bottom: 2rem;">
          <label style="display: block; margin-bottom: 0.5rem; font-size: 0.9rem; font-weight: 500;">Message *</label>
          <textarea required placeholder="Describe your needs in detail..." style="width: 100%; padding: 0.8rem 1rem; border: 1px solid var(--border); border-radius: 8px; font-family: var(--font-body); font-size: 0.95rem; min-height: 120px; resize: vertical;"></textarea>
        </div>
        
        <button type="submit" class="btn-primary" style="width: 100%; padding: 1rem; font-size: 1rem;">Send Message</button>
      </form>
    </div>
    
  </div>
</section>

@endsection
