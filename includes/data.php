<?php
/**
 * Developer Profile & Portfolio Data Store
 * All information strictly reflects verified early-career credentials without exaggeration.
 */

return [
    'profile' => [
        'name' => 'Mihir Raval',
        'role' => 'PHP Full Stack Developer',
        'sub_role' => 'Entry-Level Web Developer & Computer Engineering Student',
        'location' => 'Palanpur, Gujarat, India',
        'badge' => 'OPEN TO ENTRY-LEVEL OPPORTUNITIES',
        'headline' => 'Building practical, database-driven web applications with clean structure.',
        'intro' => 'I am a Computer Engineering student and web developer passionate about building reliable web applications with PHP, MySQL, and modern frontend tools. I focus on practical CRUD workflows, relational database logic, and clean code that solves real problems.',
        'education' => [
            'degree' => 'Bachelor of Engineering in Computer Engineering',
            'institution' => 'Government Engineering College, Palanpur',
            'period' => 'Expected Graduation: 2027',
            'cgpa' => '7.50',
            'status' => 'Currently Enrolled (Undergraduate)'
        ],
        'social' => [
            'github' => 'https://github.com/Mihir290545',
            'linkedin' => 'https://www.linkedin.com/in/mihir-raval-2aa82b377/',
            'email' => 'mihiryogirajubhai@gmail.com',
        ],
        'resume' => 'assets/resume/Mihir_Raval_Resume.pdf'
    ],

    'principles' => [
        [
            'number' => '01',
            'title' => 'Build Practical Functionality',
            'description' => 'I prioritize developing web applications with meaningful workflows, robust database operations, and dependable logic over superficial decorations.'
        ],
        [
            'number' => '02',
            'title' => 'Understand the Entire Flow',
            'description' => 'I focus on understanding how frontend forms, server-side HTTP request cycles, and MySQL relational queries connect seamlessly.'
        ],
        [
            'number' => '03',
            'title' => 'Iterate & Refine Continuously',
            'description' => 'I actively expand my engineering capabilities by building real projects, debugging errors systematically, testing features, and refactoring code.'
        ]
    ],

    'skills' => [
        'backend' => [
            'category' => 'Backend Development',
            'icon' => 'server',
            'items' => [
                ['name' => 'PHP', 'highlight' => true, 'desc' => 'Core scripting, procedural & OOP fundamentals'],
                ['name' => 'Server-Side Scripting', 'highlight' => false, 'desc' => 'Request handling & dynamic templating'],
                ['name' => 'Form Handling & Sanitization', 'highlight' => false, 'desc' => 'Secure input processing & cleaning'],
                ['name' => 'CRUD Operations', 'highlight' => true, 'desc' => 'Create, Read, Update, Delete cycles'],
                ['name' => 'Backend Validation', 'highlight' => false, 'desc' => 'Server validation rules & boundary tests'],
                ['name' => 'Session Management', 'highlight' => false, 'desc' => 'State tracking & auth session flows'],
                ['name' => 'Business Logic', 'highlight' => false, 'desc' => 'Structured application service flow']
            ]
        ],
        'database' => [
            'category' => 'Database & Storage',
            'icon' => 'database',
            'items' => [
                ['name' => 'MySQL', 'highlight' => true, 'desc' => 'Relational database schema & management'],
                ['name' => 'SQL Queries', 'highlight' => false, 'desc' => 'SELECT, JOIN, INSERT, UPDATE, DELETE'],
                ['name' => 'Relational Design Fundamentals', 'highlight' => false, 'desc' => 'Primary/foreign keys & table relationships'],
                ['name' => 'Data Management', 'highlight' => false, 'desc' => 'Data types, constraints, and index basics']
            ]
        ],
        'frontend' => [
            'category' => 'Frontend Development',
            'icon' => 'layout',
            'items' => [
                ['name' => 'HTML5', 'highlight' => false, 'desc' => 'Semantic structure & accessibility standards'],
                ['name' => 'CSS3', 'highlight' => false, 'desc' => 'Custom styling, CSS Grid, Flexbox layouts'],
                ['name' => 'JavaScript (ES6+)', 'highlight' => true, 'desc' => 'Modern syntax, asynchronous flows, fetch'],
                ['name' => 'DOM Manipulation', 'highlight' => false, 'desc' => 'Event listeners, dynamic UI updates'],
                ['name' => 'Responsive Web Design', 'highlight' => false, 'desc' => 'Mobile-first breakpoints & fluid grids']
            ]
        ],
        'web_dev' => [
            'category' => 'Web Development & APIs',
            'icon' => 'globe',
            'items' => [
                ['name' => 'REST APIs', 'highlight' => true, 'desc' => 'Endpoint consumption, status codes, methods'],
                ['name' => 'HTTP Fundamentals', 'highlight' => false, 'desc' => 'GET/POST cycles, headers, status codes'],
                ['name' => 'JSON Data Parsing', 'highlight' => false, 'desc' => 'Data exchange & client/server contracts'],
                ['name' => 'Client Form Validation', 'highlight' => false, 'desc' => 'Immediate feedback and UX checks'],
                ['name' => 'Browser Storage', 'highlight' => false, 'desc' => 'localStorage & sessionStorage integration']
            ]
        ],
        'programming' => [
            'category' => 'Programming Languages',
            'icon' => 'code',
            'items' => [
                ['name' => 'PHP', 'highlight' => true, 'desc' => 'Primary backend language'],
                ['name' => 'JavaScript', 'highlight' => true, 'desc' => 'Full-stack & client-side scripting'],
                ['name' => 'C', 'highlight' => false, 'desc' => 'Computer engineering fundamentals & memory basics'],
                ['name' => 'Python', 'highlight' => false, 'desc' => 'Scripting, problem solving & logic exploration']
            ]
        ],
        'tools' => [
            'category' => 'Tools & Workflow',
            'icon' => 'tool',
            'items' => [
                ['name' => 'Git', 'highlight' => true, 'desc' => 'Branching, commit hygiene, staging'],
                ['name' => 'GitHub', 'highlight' => true, 'desc' => 'Repository management & collaboration'],
                ['name' => 'VS Code', 'highlight' => false, 'desc' => 'Primary IDE & development setup'],
                ['name' => 'Postman', 'highlight' => false, 'desc' => 'Endpoint validation & payload testing'],
                ['name' => 'npm', 'highlight' => false, 'desc' => 'Package management & script running']
            ]
        ],
        'core' => [
            'category' => 'Core Engineering Concepts',
            'icon' => 'cpu',
            'items' => [
                ['name' => 'OOP Fundamentals', 'highlight' => true, 'desc' => 'Encapsulation, inheritance, modular classes'],
                ['name' => 'Data Structures & Algorithms', 'highlight' => false, 'desc' => 'Academic foundational algorithms'],
                ['name' => 'Problem Solving & Debugging', 'highlight' => false, 'desc' => 'Systematic console & error-log diagnosis'],
                ['name' => 'CRUD Architecture', 'highlight' => false, 'desc' => 'End-to-end data lifecycle design']
            ]
        ]
    ],

    'projects' => [
        [
            'id' => 'tasksphere',
            'num' => '01',
            'title' => 'TaskSphere',
            'subtitle' => 'Database-Driven Task & Workflow Management Application',
            'category' => 'Full Stack Web Application',
            'tech_stack' => ['PHP', 'MySQL', 'HTML5', 'CSS3', 'JavaScript'],
            'live_url' => 'http://tasksphere.wuaze.com',
            'github_url' => 'https://github.com/Mihir290545',
            'image' => 'assets/images/projects/task-sphere.svg',
            'summary' => 'A practical task management platform engineered to organize personal and team workflows, manage task lifecycle stages, and persist operational records using PHP and relational MySQL.',
            'description' => 'TaskSphere was developed to explore full-cycle web development using PHP and MySQL. It features organized workflow boards, database-driven task creation, priority flags, and status transitions. The application handles server-side form validation, relational queries for task assignments, and clean UI updates to make daily task tracking clear and dependable.',
            'highlights' => [
                'Full CRUD operations for tasks, status tags, and workflow items',
                'Relational MySQL schema structure with indexed foreign keys',
                'Server-side validation and input sanitization routines',
                'Responsive task management dashboard designed for desktop and mobile'
            ],
            'status' => 'Deployed Application'
        ],
        [
            'id' => 'devdock',
            'num' => '02',
            'title' => 'DevDock',
            'subtitle' => 'API Tool & Developer Request Inspection Workspace',
            'category' => 'Developer Utility & API Tool',
            'tech_stack' => ['JavaScript (ES6+)', 'REST APIs', 'JSON', 'HTML5', 'CSS3'],
            'live_url' => 'https://devdock.freedev.app',
            'github_url' => 'https://github.com/Mihir290545/API-Tool',
            'image' => 'assets/images/projects/dev-dock.svg',
            'summary' => 'A focused developer workspace and API testing utility crafted to dispatch HTTP requests, inspect RESTful headers, and evaluate formatted JSON responses.',
            'description' => 'DevDock solves the need for an accessible, lightweight tool to quickly inspect API behavior during development. Built with clean JavaScript and modern asynchronous fetch APIs, DevDock allows developers to construct requests, configure query params, inspect HTTP status codes, and analyze formatted JSON responses without launching heavy software.',
            'highlights' => [
                'Interactive HTTP method dispatching (GET, POST, PUT, DELETE)',
                'Structured JSON payload parsing and formatted syntax inspection',
                'HTTP status code response timing and header inspection utilities',
                'Lightweight client-side architecture with zero external framework dependencies'
            ],
            'status' => 'Deployed Tool'
        ],
        [
            'id' => 'financeflow',
            'num' => '03',
            'title' => 'FinanceFlow',
            'subtitle' => 'Personal Finance & Financial Cash Flow Tracker',
            'category' => 'Financial Tracking Application',
            'tech_stack' => ['JavaScript (ES6+)', 'Local Storage', 'CSS Grid', 'HTML5'],
            'live_url' => 'https://financeflow-indol.vercel.app/',
            'github_url' => 'https://github.com/Mihir290545/financeflow',
            'image' => 'assets/images/projects/finance-flow.svg',
            'summary' => 'A personal cashflow tracking web application designed to log monetary transactions, categorize expenditures, and calculate real-time net balances.',
            'description' => 'FinanceFlow offers an intuitive interface for tracking personal income and everyday expenses. By implementing persistent client-side data structures, dynamic calculations, and category filters, users gain transparency over their spending patterns. The application emphasizes clean layout hierarchy and instant arithmetic balance recalculations upon transaction submission.',
            'highlights' => [
                'Real-time balance calculation with automatic income and expense aggregation',
                'Categorized transaction tagging with visual type indicators',
                'Persistent transaction history utilizing client-side storage',
                'Responsive financial summary cards with high-contrast accessibility'
            ],
            'status' => 'Deployed Application'
        ]
    ],

    'experience' => [
        [
            'role' => 'Junior MERN Stack Developer Intern',
            'company' => 'Depple Sorf Pvt. Ltd.',
            'type' => 'Internship',
            'description' => 'Contributed to front-end development, application workflows, and component building within a team environment.',
            'responsibilities' => [
                'Built responsive web interfaces and user-facing views using HTML5, CSS3, JavaScript, and React.js.',
                'Implemented interactive forms, client-side input validations, and structured data handling.',
                'Worked with RESTful API integrations to connect frontend components with dynamic backend services.',
                'Utilized Git and GitHub for version control, collaborative branch management, and code reviews.',
                'Employed Postman, VS Code, and npm to debug API requests and execute functional browser testing.'
            ],
            'skills_used' => ['React.js', 'JavaScript (ES6+)', 'HTML5 / CSS3', 'REST APIs', 'Postman', 'Git & GitHub']
        ]
    ],

    'education' => [
        'degree' => 'Bachelor of Engineering in Computer Engineering',
        'institution' => 'Government Engineering College, Palanpur',
        'university' => 'Gujarat Technological University (GTU)',
        'location' => 'Palanpur, Gujarat, India',
        'timeline' => '2023 - Expected 2027',
        'cgpa' => '7.50',
        'courses' => [
            'Database Management Systems',
            'Data Structures & Algorithms',
            'Object-Oriented Programming',
            'Web Development Fundamentals',
            'Operating Systems',
            'Computer Networks'
        ]
    ]
];
