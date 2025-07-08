<?php
// index.php

// Sertakan bagian header dan navbar
include 'includes/header.php';
include 'includes/navbar.php';
include 'includes/db_config.php'; // Sertakan konfigurasi database untuk mengambil data proyek

// Ambil pesan status dari URL jika ada (setelah pengiriman form kontak)
$status_message = '';
$status_type = '';
if (isset($_GET['status']) && isset($_GET['msg'])) {
    $status_type = htmlspecialchars($_GET['status']);
    $status_message = htmlspecialchars($_GET['msg']);
}
?>

    <section id="home" class="min-h-screen flex items-center justify-center pt-24 pb-12 relative z-10 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="text-center md:text-left">
                    <h1 class="text-5xl md:text-7xl font-bold mb-4 leading-tight animated-section hero-title">
                        <span class="gradient-text">Hadiq Fadlul Wafi</span>
                    </h1>
                    <h2 class="text-3xl md:text-4xl font-semibold mb-6 text-gray-300 animated-section hero-subtitle">
                        Junior Programmer
                    </h2>
                    <p class="text-lg text-gray-400 mb-10 max-w-lg mx-auto md:mx-0 animated-section hero-text">
                        Building modern web applications with Laravel and React. Passionate about creating efficient,
                         scalable, and user-friendly solutions to deliver real impact.
                    </p>
                    <div class="flex space-x-6 justify-center md:justify-start animated-section hero-buttons">
                        <a href="#contact" class="btn-primary btn-gradient">
                            Contact Me <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                        <a href="https://github.com/WAFI091005" target="_blank" class="btn-primary btn-outline">
                            View GitHub <i class="fab fa-github ml-2"></i>
                        </a>
                    </div>
                </div>
                <div class="relative flex justify-center animated-section hero-avatar">
                    <div class="relative w-72 h-72 md:w-96 md:h-96 rounded-full overflow-hidden border-4 border-purple-600 glow floating flex items-center justify-center p-4">
                        <div id="3d-avatar" class="w-full h-full bg-gray-800 rounded-full flex items-center justify-center overflow-hidden">
                            <img src="assets/img/wafi.jpg" alt="Hadiq Fadlul Wafi" class="object-cover w-full h-full rounded-full">
                        </div>
                        <div class="absolute inset-0 rounded-full border-4 border-transparent pointer-events-none" style="box-shadow: inset 0 0 30px rgba(0,219,222,0.3), inset 0 0 30px rgba(252,0,255,0.3);"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-28 bg-gray-900 bg-opacity-90 relative z-10 animated-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-center mb-20 section-title">
                <span class="gradient-text">About Me</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                <div class="card p-10 rounded-xl animated-left">
                    <h3 class="text-3xl font-semibold mb-6 gradient-text">Who I Am</h3>
                    <p class="text-gray-300 mb-6 text-lg">
                        I'm a passionate **Full Stack Developer** based in Tangerang, Indonesia, specializing in building robust web applications using cutting-edge technologies like **Laravel** and **React**.
                    </p>
                    <p class="text-gray-300 mb-8 text-lg">
                        My expertise spans both **backend and frontend development**, enabling me to craft efficient, scalable, and user-friendly solutions from concept to deployment. I thrive on solving complex problems and transforming ideas into impactful digital experiences.
                    </p>
                    <div class="flex flex-wrap gap-x-6 gap-y-4">
                        <div class="flex items-center group">
                            <div class="w-4 h-4 rounded-full bg-purple-500 mr-2 shadow-purple-glow group-hover:scale-125 transition"></div>
                            <span class="text-gray-300 font-medium group-hover:text-white transition">Backend Development</span>
                        </div>
                        <div class="flex items-center group">
                            <div class="w-4 h-4 rounded-full bg-blue-500 mr-2 shadow-blue-glow group-hover:scale-125 transition"></div>
                            <span class="text-gray-300 font-medium group-hover:text-white transition">Frontend Development</span>
                        </div>
                        <div class="flex items-center group">
                            <div class="w-4 h-4 rounded-full bg-pink-500 mr-2 shadow-pink-glow group-hover:scale-125 transition"></div>
                            <span class="text-gray-300 font-medium group-hover:text-white transition">API Integration</span>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-cols-2 gap-8 animated-right">
                    <div class="card p-8 rounded-xl text-center">
                        <div class="text-5xl mb-3 gradient-text font-bold">2+</div>
                        <div class="text-gray-300 text-lg">Years Experience</div>
                    </div>
                    <div class="card p-8 rounded-xl text-center">
                        <div class="text-5xl mb-3 gradient-text font-bold">5+</div>
                        <div class="text-gray-300 text-lg">Projects Completed</div>
                    </div>
                    <div class="card p-8 rounded-xl text-center">
                        <div class="text-5xl mb-3 gradient-text font-bold">100%</div>
                        <div class="text-gray-300 text-lg">Client Satisfaction</div>
                    </div>
                    <div class="card p-8 rounded-xl text-center">
                        <div class="text-5xl mb-3 gradient-text font-bold">24/7</div>
                        <div class="text-gray-300 text-lg">Continuous Learning</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="projects" class="py-28 bg-gray-800 bg-opacity-95 relative z-10 animated-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-center mb-20 section-title">
                <span class="gradient-text">My Latest Projects</span>
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <?php
                // Ambil data proyek dari database
                $sql_projects = "SELECT * FROM projects ORDER BY created_at DESC";
                // $sql_projects = "SELECT * FROM projects WHERE id NOT IN (4, 5) ORDER BY created_at DESC";
                $result_projects = $conn->query($sql_projects);

                if ($result_projects->num_rows > 0) {
                    while ($row = $result_projects->fetch_assoc()) {
                ?>
                        <div class="card p-6 rounded-xl flex flex-col animated-up">
                            <img src="<?php echo htmlspecialchars($row['image_url']); ?>" alt="<?php echo htmlspecialchars($row['title']); ?>" class="w-full h-48 object-cover rounded-md mb-6 border border-gray-700">
                            <h3 class="text-2xl font-semibold mb-3 gradient-text"><?php echo htmlspecialchars($row['title']); ?></h3>
                            <p class="text-gray-300 text-base mb-4 flex-grow"><?php echo htmlspecialchars($row['description']); ?></p>
                            
                            <?php if (!empty($row['technologies'])): ?>
                                <div class="mb-4">
                                    <span class="text-sm font-medium text-gray-400">Tech Stack:</span>
                                    <p class="text-sm text-gray-300 mt-1"><?php echo htmlspecialchars($row['technologies']); ?></p>
                                </div>
                            <?php endif; ?>

                            <div class="flex flex-wrap gap-3 mt-auto pt-4 border-t border-gray-700">
                                <?php if (!empty($row['github_link'])): ?>
                                    <a href="<?php echo htmlspecialchars($row['github_link']); ?>" target="_blank" class="px-4 py-2 bg-gray-700 text-gray-200 rounded-md text-sm hover:bg-gray-600 transition flex items-center">
                                        <i class="fab fa-github mr-2"></i> GitHub
                                    </a>
                                <?php endif; ?>
                                <?php if (!empty($row['live_demo_link'])): ?>
                                    <a href="<?php echo htmlspecialchars($row['live_demo_link']); ?>" target="_blank" class="px-4 py-2 bg-purple-600 text-white rounded-md text-sm hover:bg-purple-700 transition flex items-center">
                                        <i class="fas fa-external-link-alt mr-2"></i> Live Demo
                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                <?php
                    }
                } else {
                    echo '<p class="text-center text-gray-400 col-span-full">No projects found yet. Check back soon!</p>';
                }
                ?>
            </div>
        </div>
    </section>

    <section id="skills" class="py-28 bg-gray-900 bg-opacity-90 relative z-10 animated-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-center mb-20 section-title">
                <span class="gradient-text">Technical Skills</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="card p-10 rounded-xl animated-left">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 rounded-full bg-purple-700 flex items-center justify-center mr-5 shadow-lg">
                            <i class="fas fa-server text-white text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold gradient-text">Backend Development</h3>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-300 text-lg">Laravel</span>
                            <span class="text-purple-400 font-semibold">80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-300 text-lg">RESTful API</span>
                            <span class="text-purple-400 font-semibold">75%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-300 text-lg">MySQL</span>
                            <span class="text-purple-400 font-semibold">80%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 80%"></div>
                        </div>
                    </div>
                </div>
                
                <div class="card p-10 rounded-xl animated-right">
                    <div class="flex items-center mb-8">
                        <div class="w-12 h-12 rounded-full bg-blue-700 flex items-center justify-center mr-5 shadow-lg">
                            <i class="fas fa-laptop-code text-white text-xl"></i>
                        </div>
                        <h3 class="text-3xl font-semibold gradient-text">Frontend Development</h3>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-300 text-lg">React Native</span>
                            <span class="text-blue-400 font-semibold">70%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-300 text-lg">Tailwind CSS</span>
                            <span class="text-blue-400 font-semibold">75%</span>
                        </div>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 90%"></div>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex justify-between mb-2">
                            <span class="text-gray-300 text-lg">TypeScript</span>
                            <span class="text-sky-500 font-semibold">70%</span>
                        </div>
                        <div class="skill-bar bg-gray-700 rounded-full h-2 overflow-hidden">
                            <div class="skill-progress bg-sky-500 h-full" style="width: 82%"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-20 text-center">
                <h3 class="text-3xl font-semibold text-center mb-10 gradient-text tech-stack-title">Key Technologies</h3>
                <div class="flex flex-wrap justify-center gap-8 md:gap-10">
                    <div class="tech-icon text-5xl" title="Laravel">
                        <i class="fab fa-laravel text-red-500"></i>
                    </div>
                    <div class="tech-icon text-5xl" title="React">
                        <i class="fab fa-react text-blue-400"></i>
                    </div>
                    <div class="tech-icon text-5xl" title="TypeScript">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/typescript/typescript-original.svg" alt="TypeScript" class="w-12 h-12">
                    </div>
                    <div class="tech-icon text-5xl" title="PHP">
                        <i class="fab fa-php text-purple-500"></i>
                    </div>
                    <div class="tech-icon text-5xl" title="HTML5">
                        <i class="fab fa-html5 text-orange-500"></i>
                    </div>
                    <div class="tech-icon text-5xl" title="CSS3">
                        <i class="fab fa-css3-alt text-blue-500"></i>
                    </div>
                    <div class="tech-icon text-5xl" title="MySQL">
                        <i class="fas fa-database text-blue-600"></i>
                    </div>
                    <div class="tech-icon text-5xl" title="Tailwind CSS">
                        <i class="fas fa-wind text-teal-400"></i>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="py-28 bg-gray-900 bg-opacity-90 relative z-10 animated-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-center mb-20 section-title">
                <span class="gradient-text">Education & Experience</span>
            </h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div class="card p-10 rounded-xl animated-left">
                    <h3 class="text-3xl font-semibold mb-8 gradient-text flex items-center">
                        <i class="fas fa-graduation-cap mr-4 text-3xl"></i> Education
                    </h3>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot">
                            <i class="fas fa-university text-white text-sm"></i>
                        </div>
                        <div class="pl-8">
                            <h4 class="text-xl font-medium text-white mb-1">S1 Teknik Informatika</h4>
                            <p class="text-purple-400 mb-2 font-medium">Universitas Teknologi Indonesia</p>
                            <p class="text-gray-400 text-sm">September 2020 – Juli 2024</p>
                            <p class="text-gray-300 mt-3 text-base">
                                Focused on **software engineering principles**, data structures, algorithms, and modern web development methodologies. Engaged in various impactful projects applying theoretical knowledge to real-world scenarios.
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="card p-10 rounded-xl animated-right">
                    <h3 class="text-3xl font-semibold mb-8 gradient-text flex items-center">
                        <i class="fas fa-briefcase mr-4 text-3xl"></i> Experience
                    </h3>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot">
                            <i class="fas fa-code text-white text-sm"></i>
                        </div>
                        <div class="pl-8">
                            <h4 class="text-xl font-medium text-white mb-1">Full Stack Developer</h4>
                            <p class="text-purple-400 mb-2 font-medium">Freelance</p>
                            <p class="text-gray-400 text-sm">Maret 2021 – Sekarang</p>
                            <p class="text-gray-300 mt-3 text-base">
                                Spearheaded the development of various web applications from conception to deployment, utilizing **Laravel** for robust backend APIs and **React** for dynamic, responsive user interfaces. Managed project lifecycles and client communication, delivering tailor-made solutions.
                            </p>
                        </div>
                    </div>
                    
                    <div class="timeline-item">
                        <div class="timeline-dot">
                            <i class="fas fa-laptop-code text-white text-sm"></i>
                        </div>
                        <div class="pl-8">
                            <h4 class="text-xl font-medium text-white mb-1">Web Developer Intern</h4>
                            <p class="text-purple-400 mb-2 font-medium">Tech Company</p>
                            <p class="text-gray-400 text-sm">Juni 2022 – Agustus 2022</p>
                            <p class="text-gray-300 mt-3 text-base">
                                Contributed to the development of internal tools and client projects, gaining valuable hands-on experience in **team collaboration**, **version control (Git)**, and **agile development methodologies**. Actively participated in code reviews and feature implementation.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-28 bg-gray-900 bg-opacity-90 relative z-10 animated-section">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-4xl font-bold text-center mb-20 section-title">
                <span class="gradient-text">Get In Touch</span>
            </h2>

            <?php if ($status_message): ?>
                <div class="mb-8 p-4 rounded-lg text-center 
                    <?php echo ($status_type == 'success') ? 'bg-green-600 text-white' : 'bg-red-600 text-white'; ?>">
                    <?php echo $status_message; ?>
                </div>
            <?php endif; ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-16">
                <div class="card p-10 rounded-xl animated-left">
                    <h3 class="text-3xl font-semibold mb-8 gradient-text">Contact Information</h3>
                    
                    <div class="flex items-start mb-8">
                        <div class="w-12 h-12 rounded-full bg-purple-700 flex items-center justify-center mr-5 shadow-lg">
                            <i class="fas fa-map-marker-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-medium text-white">Location</h4>
                            <p class="text-gray-300 text-lg">Tangerang, Indonesia</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start mb-8">
                        <div class="w-12 h-12 rounded-full bg-blue-700 flex items-center justify-center mr-5 shadow-lg">
                            <i class="fas fa-envelope text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-medium text-white">Email</h4>
                            <p class="text-gray-300 text-lg">hdqwafi@gmail.com</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start mb-8">
                        <div class="w-12 h-12 rounded-full bg-green-700 flex items-center justify-center mr-5 shadow-lg">
                            <i class="fas fa-phone-alt text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-medium text-white">Phone</h4>
                            <p class="text-gray-300 text-lg">+62 882-1430-6381</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start mb-8">
                        <div class="w-12 h-12 rounded-full bg-blue-600 flex items-center justify-center mr-5 shadow-lg">
                            <i class="fab fa-linkedin-in text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-medium text-white">LinkedIn</h4>
                            <p class="text-gray-300 text-lg"><a href="https://www.linkedin.com/in/hadiq-wafi-4bb5b72b0/" target="_blank" class="hover:text-purple-400 transition">linkedin.com/in/hadiqfw</a></p>
                        </div>
                    </div>

                    <div class="flex items-start">
                        <div class="w-12 h-12 rounded-full bg-gray-700 flex items-center justify-center mr-5 shadow-lg">
                            <i class="fab fa-github text-white text-xl"></i>
                        </div>
                        <div>
                            <h4 class="text-xl font-medium text-white">GitHub</h4>
                            <p class="text-gray-300 text-lg"><a href="https://github.com/WAFI091005" target="_blank" class="hover:text-purple-400 transition">github.com/hadiqfw</a></p>
                        </div>
                    </div>
                </div>
                
                <div class="card p-10 rounded-xl animated-right">
                    <h3 class="text-3xl font-semibold mb-8 gradient-text">Send Me a Message</h3>
                    <form action="contact_process.php" method="POST">
                        <div class="mb-6">
                            <label for="name" class="block text-gray-300 text-lg mb-2 font-medium">Your Name</label>
                            <input type="text" id="name" name="name" class="w-full px-5 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-white text-lg placeholder-gray-500" placeholder="Enter your full name" required>
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block text-gray-300 text-lg mb-2 font-medium">Your Email</label>
                            <input type="email" id="email" name="email" class="w-full px-5 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-white text-lg placeholder-gray-500" placeholder="your.email@example.com" required>
                        </div>
                        <div class="mb-8">
                            <label for="message" class="block text-gray-300 text-lg mb-2 font-medium">Your Message</label>
                            <textarea id="message" name="message" rows="6" class="w-full px-5 py-3 bg-gray-800 border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-purple-500 text-white text-lg placeholder-gray-500" placeholder="Tell me about your project or inquiry..." required></textarea>
                        </div>
                        <button type="submit" class="btn-primary btn-gradient w-full">
                            Send Message <i class="fas fa-paper-plane ml-2"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php
// Sertakan bagian footer
include 'includes/footer.php';
?>