<?php get_header(); ?>
<main>
    <div class="hc-container hc-breaking"><strong>Breaking News</strong><p>Global markets rally as technology, culture, and sports stories dominate today's headlines.</p></div>
    <section class="hc-container hc-grid hc-hero">
        <article class="hc-card hc-card--large" style="--bg:linear-gradient(135deg,#0f172a,#ef4444)"><div class="hc-card__body"><span class="hc-tag">Featured</span><h1>Elementor-ready news portal with a classic HTML Codex magazine feel</h1><div class="hc-meta">Admin · June 23, 2026 · 12 Comments</div></div></article>
        <div class="hc-grid">
            <article class="hc-card" style="--bg:linear-gradient(135deg,#1d4ed8,#0f172a)"><div class="hc-card__body"><span class="hc-tag">World</span><h2>Morning briefing highlights the stories readers need first</h2><div class="hc-meta">5 min read</div></div></article>
            <article class="hc-card" style="--bg:linear-gradient(135deg,#047857,#111827)"><div class="hc-card__body"><span class="hc-tag">Business</span><h2>Markets, startups, and finance updates in one clean block</h2><div class="hc-meta">7 min read</div></div></article>
        </div>
    </section>
    <div class="hc-container hc-grid hc-main">
        <section class="hc-section"><h2 class="hc-section__title">Latest News</h2><div class="hc-news-list">
            <?php foreach ([['Technology trends reshape digital publishing','#7c3aed'],['Sports fans celebrate a dramatic finish','#dc2626'],['Culture editors pick the week’s essential reads','#0891b2'],['Travel desk shares smart city guides','#ea580c']] as $item) : ?>
            <article class="hc-news-item"><div class="hc-thumb" style="--bg:linear-gradient(135deg,<?php echo esc_attr($item[1]); ?>,#111827)"></div><div><span class="hc-tag">News</span><h3><?php echo esc_html($item[0]); ?></h3><div class="hc-meta">Reporter · June 23, 2026</div><p>Use Elementor to replace this placeholder copy with live WordPress widgets, post loops, or custom editorial modules.</p></div></article>
            <?php endforeach; ?>
        </div></section>
        <aside>
            <section class="hc-section"><h2 class="hc-section__title">Trending</h2><?php for ($i = 1; $i <= 4; $i++) : ?><article class="hc-sidebar-card"><span class="hc-tag">#<?php echo esc_html((string) $i); ?></span><h4>High-impact sidebar headline designed for quick scanning</h4></article><?php endfor; ?></section>
            <section class="hc-section"><h2 class="hc-section__title">Categories</h2><div class="hc-category"><span>Politics</span><span>24</span></div><div class="hc-category"><span>Technology</span><span>18</span></div><div class="hc-category"><span>Entertainment</span><span>16</span></div><div class="hc-category"><span>Sports</span><span>31</span></div></section>
            <section class="hc-section hc-newsletter"><h2>Newsletter</h2><p>Get the top stories delivered every morning.</p><input placeholder="Email address"><button class="hc-button">Subscribe</button></section>
        </aside>
    </div>
</main>
<?php get_footer(); ?>
