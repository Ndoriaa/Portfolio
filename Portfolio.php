<?php
// Core Identity
$name = "Victor Ndoria";
$tagline = "Full-Stack Web Developer  | Business IT Specialist";
$email = "victorndoria8@gmail.com"; // Update this with your actual email

// Skills for the Progress Bars
$skills = [
    "PHP & MySQL" => 92,
    "JavaScript (ES6+)" => 88,
    "HTML" => 95,
    "CSS" => 90,
    "Python & Data Science" => 78,
    "Visual Basic" => 90,
    "GIS & QGIS Mapping" => 82
];

// Project Data
$projects = [
    [
        "title" => "TaskFlow",
        "category" => "Enterprise Solution",
        "desc" => "A robust PHP-based system for managing departmental workflows and task distribution."
    ],
    [
        "title" => "BRITIFY",
        "category" => "E-Commerce",
        "desc" => "A luxury-focused digital storefront prototype with a custom administrative backend."
    ],
    [
        "title" => "Eventology Caterers",
        "category" => "Enterprise Solution",
        "desc" => "A robust PHP-based system for managing event catering and quick on the go meals"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $name; ?> | Portfolio</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body { 
            background-color: #0f172a; 
            color: #f8fafc; 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            scroll-behavior: smooth;
        }
        .glass-nav { 
            background: rgba(15, 23, 42, 0.8); 
            backdrop-filter: blur(12px); 
            border-bottom: 1px solid rgba(255,255,255,0.05); 
        }
        .bento-card { 
            background: rgba(30, 41, 59, 0.5); 
            border: 1px solid rgba(255,255,255,0.1); 
            transition: all 0.3s ease;
        }
        .bento-card:hover { 
            border-color: #2dd4bf; 
            transform: translateY(-5px); 
            background: rgba(30, 41, 59, 0.8);
        }
        .progress-bg { height: 6px; background: #334155; border-radius: 10px; overflow: hidden; }
        .progress-fill { height: 100%; background: linear-gradient(90deg, #2dd4bf, #0ea5e9); border-radius: 10px; }
    </style>
</head>
<body>

    <nav class="fixed w-full z-50 glass-nav py-5 px-10 flex justify-between items-center">
        <div class="text-xl font-bold tracking-widest text-teal-400 uppercase"><?php echo $name; ?></div>
        <div class="hidden md:flex space-x-10 text-xs font-semibold uppercase tracking-widest text-slate-400">
            <a href="#about" class="hover:text-white transition">About</a>
            <a href="#skills" class="hover:text-white transition">Skills</a>
            <a href="#projects" class="hover:text-white transition">Portfolio</a>
            <a href="#contact" class="hover:text-white transition">Contact</a>
        </div>
    </nav>

    <section class="min-h-screen flex flex-col justify-center px-10 md:px-24">
        <span class="text-teal-400 font-mono mb-4 text-lg">Available for May 2026 Internships</span>
        <h1 class="text-6xl md:text-8xl font-extrabold mb-6 tracking-tight">
            <?php echo $name; ?>.
        </h1>
        <p class="text-xl text-slate-400 max-w-xl leading-relaxed mb-10">
            I bridge the gap between complex backend logic and premium digital experiences. Currently finalizing my BBIT at KCA University.
        </p>
        <div class="flex gap-6">
            <a href="#projects" class="bg-teal-500 text-slate-900 px-10 py-4 rounded-lg font-bold hover:bg-teal-400 transition">View My Work</a>
            <a href="mailto:<?php echo $email; ?>" class="border border-slate-700 px-10 py-4 rounded-lg font-bold hover:bg-slate-800 transition">Contact Me</a>
        </div>
    </section>

    <section id="skills" class="py-32 px-10 md:px-24 container mx-auto">
        <div class="grid lg:grid-cols-2 gap-20">
            <div>
                <h2 class="text-4xl font-bold mb-12">Technical <span class="text-teal-400">Stack</span></h2>
                <div class="space-y-8">
                    <?php foreach($skills as $label => $percent): ?>
                    <div>
                        <div class="flex justify-between mb-3 font-medium">
                            <span><?php echo $label; ?></span>
                            <span class="text-slate-500"><?php echo $percent; ?>%</span>
                        </div>
                        <div class="progress-bg"><div class="progress-fill" style="width: <?php echo $percent; ?>%"></div></div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="bento-card p-10 rounded-3xl">
                <h2 class="text-3xl font-bold mb-8">Education & Path</h2>
                <div class="space-y-10">
                    <div class="relative pl-8 border-l border-slate-700">
                        <div class="absolute w-3 h-3 bg-teal-400 rounded-full -left-[6px] top-2"></div>
                        <h4 class="text-xl font-bold">BSc. Software Development</h4>
                        <p class="text-teal-400 text-sm mb-2">KCA University | 2022 - 2026</p>
                        <p class="text-slate-400 text-sm leading-relaxed">Focusing on Software Engineering, Database Management, and Data Analytics.</p>
                    </div>
                    <div class="relative pl-8 border-l border-slate-700">
                        <div class="absolute w-3 h-3 bg-slate-500 rounded-full -left-[6px] top-2"></div>
                        <h4 class="text-xl font-bold">Aspiring Full-Stack Intern</h4>
                        <p class="text-teal-400 text-sm mb-2">USIU-Africa | Commencing May 2026</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-32 px-10 md:px-24 bg-slate-900/30">
        <h2 class="text-center text-4xl font-bold mb-20">Featured <span class="text-teal-400">Projects</span></h2>
        <div class="grid md:grid-cols-3 gap-8">
            <?php foreach($projects as $p): ?>
            <div class="bento-card p-8 rounded-2xl group">
                <div class="text-teal-400 text-xs font-bold uppercase tracking-widest mb-4"><?php echo $p['category']; ?></div>
                <h3 class="text-2xl font-bold mb-4 group-hover:text-teal-400 transition"><?php echo $p['title']; ?></h3>
                <p class="text-slate-400 text-sm leading-relaxed"><?php echo $p['desc']; ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </section>

    <footer id="contact" class="py-32 px-10 text-center border-t border-slate-800">
        <h2 class="text-5xl font-bold mb-6 italic">Let's build something <span class="text-teal-400">great.</span></h2>
        <p class="text-slate-400 mb-10 max-w-lg mx-auto"></p>
        <a href="mailto:<?php echo $email; ?>" class="text-3xl font-light hover:text-teal-400 transition decoration-teal-400 underline underline-offset-8">
            <?php echo $email; ?>
        </a>
        <div class="mt-24 text-[10px] uppercase tracking-[0.3em] text-slate-600">
            &copy; <?php echo date("Y"); ?> <?php echo $name; ?> — Engineered with PHP
        </div>
    </footer>

</body>
</html>