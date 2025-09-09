<!DOCTYPE html>
<html lang="en" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to BiteHost™</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .bg-gradient-primary {
            background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
        }
        .bg-gradient-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        .ascii-art {
            color: #475569;
            font-family: 'Courier New', monospace;
            line-height: 1.3;
            white-space: pre;
            padding: 1rem;
        }
        .feature-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        .glow {
            animation: glow 2s infinite alternate;
        }
        @keyframes glow {
            from { box-shadow: 0 0 10px -10px #4f46e5; }
            to { box-shadow: 0 0 20px 0px #4f46e5; }
        }
    </style>
</head>
<body class="min-h-screen bg-gradient-primary text-slate-800 flex flex-col items-center justify-center p-4">

    <div class="w-full max-w-5xl mx-auto bg-gradient-card text-slate-800 rounded-xl overflow-hidden border border-slate-100">
        <div class="card-body p-6 md:p-8">

            <!-- Header Section -->
            <div class="text-center mb-8">
                <div class="glow bg-gradient-to-r from-indigo-500 to-purple-600 text-white p-4 rounded-xl mb-6">
                    <h1 class="text-3xl md:text-4xl font-bold mb-2">
                        ʏᴏᴜʀ ꜱᴇʀᴠᴇʀ ʜᴀꜱ ʙᴇᴇɴ ꜱᴜᴄᴄᴇꜱꜱꜰᴜʟʟʏ ɪɴꜱᴛᴀʟʟᴇᴅ
                    </h1>
                    <p class="text-indigo-100">Made with ❤️ by BiteHost™</p>
                </div>
                
                <div class="bg-slate-100 p-4 rounded-lg mb-6">
                    <pre class="ascii-art text-center mx-auto">
    _______   __    __                __    __                        __     
   |       \ |  \  |  \              |  \  |  \                      |  \    
   | $$$$$$$\ \$$ _| $$_     ______  | $$  | $$  ______    _______  _| $$_   
   | $$__/ $$|  \|   $$ \   /      \ | $$__| $$ /      \  /       \|   $$ \  
   | $$    $$| $$ \$$$$$$  |  $$$$$$\| $$    $$|  $$$$$$\|  $$$$$$$ \$$$$$$  
   | $$$$$$$\| $$  | $$ __ | $$    $$| $$$$$$$$| $$  | $$ \$$    \   | $$ __ 
   | $$__/ $$| $$  | $$|  \| $$$$$$$$| $$  | $$| $$__/ $$ _\$$$$$$\  | $$|  \
   | $$    $$| $$   \$$  $$ \$$     \| $$  | $$ \$$    $$|       $$   \$$  $$
    \$$$$$$$  \$$    \$$$$   \$$$$$$$ \$$   \$$  \$$$$$$  \$$$$$$$     \$$$$ 
                    </pre>
                </div>
            </div>
            <!-- Welcome Section -->
            <div class="grid md:grid-cols-2 gap-8 mb-10">
                <div class="flex flex-col justify-center">
                    <h2 class="text-2xl md:text-3xl font-bold text-indigo-700 mb-4">
                        <i class="fas fa-rocket mr-2 text-indigo-500"></i>Welcome to BiteHost™
                    </h2>
                    <p class="text-slate-700 mb-4">
                        Thank you for choosing our hosting services. We're excited to help you bring your ideas to life on the web.
                    </p>
                    <p class="text-slate-700 mb-6">
                        Whether you're building a personal blog, an online store, or a web application, we've got you covered with reliable hosting and helpful resources.
                    </p>
                    
                    <div class="bg-indigo-50 p-4 rounded-lg border border-indigo-100">
                        <p class="text-indigo-800 font-medium">
                            <i class="fas fa-lightbulb text-indigo-500 mr-2"></i>
                            Join our community we are here for you!
                        </p>
                        <a href="https://discord.bitehost.me" target="_blank" rel="noopener noreferrer" 
                           class="btn btn-primary mt-4 w-full">
                            <i class="fab fa-discord mr-2"></i> Join our Discord
                        </a>
                    </div>
                </div>
                
                <div class="bg-slate-50 p-6 rounded-xl border border-slate-200">
                    <h3 class="text-xl font-bold text-slate-700 mb-4 flex items-center">
                        <i class="fas fa-info-circle text-indigo-500 mr-2"></i> Server Information
                    </h3>
                    
                    <div class="space-y-4">
                        <div class="flex justify-between items-center p-3 bg-white rounded-lg border border-slate-200">
                            <span class="font-medium text-slate-700">PHP Version</span>
                            <span class="badge badge-primary badge-lg font-mono">
                                <?php echo htmlspecialchars(phpversion()); ?>
                            </span>
                        </div>
                        
                        <div class="flex justify-between items-center p-3 bg-white rounded-lg border border-slate-200">
                            <span class="font-medium text-slate-700">Server Software</span>
                            <span class="badge badge-ghost badge-lg"><?php echo htmlspecialchars($_SERVER['SERVER_SOFTWARE'] ?? 'N/A'); ?></span>
                        </div>
                        
                        <div class="flex justify-between items-center p-3 bg-white rounded-lg border border-slate-200">
                            <span class="font-medium text-slate-700">Document Root</span>
                            <span class="badge badge-ghost badge-lg font-mono text-xs"><?php echo htmlspecialchars($_SERVER['DOCUMENT_ROOT'] ?? 'N/A'); ?></span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Getting Started Section -->
            <div class="mb-10">
                <h2 class="text-2xl md:text-3xl font-bold text-indigo-700 mb-6 text-center">
                    <i class="fas fa-play-circle mr-2"></i>Getting Started
                </h2>
                
                <div class="grid md:grid-cols-3 gap-6">
                    <div class="feature-card bg-white p-6 rounded-xl border border-slate-200">
                        <div class="text-4xl text-indigo-500 mb-4">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3">1. Add a Domain</h3>
                        <p class="text-slate-600 mb-4">
                            Set up your custom domain or use our free subdomain service to make your site accessible online.
                        </p>
                        <ul class="text-slate-600 space-y-2 text-sm">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Navigate to <span class="font-semibold">More → Subdomains</span></span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Choose from available domains</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="feature-card bg-white p-6 rounded-xl border border-slate-200">
                        <div class="text-4xl text-indigo-500 mb-4">
                            <i class="fas fa-exchange-alt"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3">2. Configure Proxy</h3>
                        <p class="text-slate-600 mb-4">
                            Set up proxy settings to direct traffic from your domain to your web server.
                        </p>
                        <ul class="text-slate-600 space-y-2 text-sm">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Go to <span class="font-semibold">More → Proxy</span></span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Enter your domain or subdomain</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="feature-card bg-white p-6 rounded-xl border border-slate-200">
                        <div class="text-4xl text-indigo-500 mb-4">
                            <i class="fas fa-lock"></i>
                        </div>
                        <h3 class="text-xl font-bold text-slate-800 mb-3">3. Enable SSL</h3>
                        <p class="text-slate-600 mb-4">
                            Secure your website with free SSL certificates from Let's Encrypt.
                        </p>
                        <ul class="text-slate-600 space-y-2 text-sm">
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Check <span class="font-semibold">Enable SSL</span> option</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check-circle text-green-500 mt-1 mr-2"></i>
                                <span>Select <span class="font-semibold">Use Let's Encrypt</span></span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="bg-slate-50 p-6 rounded-xl border border-slate-200 mb-8">
                <h2 class="text-2xl font-bold text-slate-800 mb-4">
                    <i class="fas fa-forward mr-2 text-indigo-500"></i>What's Next?
                </h2>
                
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-700 mb-3">Upload Your Website</h3>
                        <p class="text-slate-600 mb-4">
                            Use SFTP or the file manager to upload your website files to the <span class="badge badge-ghost badge-lg font-mono text-xs">webroot</span> directory.
                        </p>
                    </div>
                    <div>
    <div class="alert alert-info">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="stroke-current shrink-0 w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
        </svg>
        <span>You can find options for automatic installers like WordPress or NamelessMC in the <strong>Startup</strong> section of your server panel.</span>
    </div>
</div>
                </div>
            </div>

            <!-- Footer -->
            <div class="text-center text-slate-500 pt-4 border-t border-slate-200">
                <p>BiteHost™ © 2025<p>
                <p class="text-sm mt-2">This page was generated automatically. Replace it with your own content.</p>
            </div>

        </div>
    </div>

</body>
</html>
