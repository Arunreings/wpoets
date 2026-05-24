1. How long did you spend on the coding test? What would you add to your solution if you had more time?

I spent around 5 hours working on the coding test. Most of the time was spent understanding the requirement properly and implementing the UI behavior exactly as mentioned in the task. Since the design involved different behaviors for desktop and mobile views, I focused on making the layout responsive and ensuring the interaction between tabs, sliders, and images worked smoothly across different screen sizes.

I started by planning the database structure and CRUD flow, then moved on to creating the frontend layout using HTML5, CSS3, Bootstrap. One of the main areas I spent time on was connecting the tab section with the slider and synchronizing the image changes in the third column. I also worked on handling the mobile view separately by converting the tab section into an accordion and adjusting the slider behavior to match the requirement.

Apart from development, I also spent time testing the functionality, fixing UI alignment issues, checking responsiveness, and refining the user interaction experience. I wanted the final output to feel clean and user-friendly instead of only focusing on completing the functionality.

If I had more time, I would enhance the project by creating a proper admin panel to manage the content dynamically. Instead of hardcoding the slider content, I would develop a form-based system where the admin can upload images, add titles, subtitles, descriptions, and manage each slider section directly from the dashboard.

I would also provide complete CRUD access through the admin panel, allowing the user to create new entries, update existing content, and delete unnecessary records easily. This would make the project more scalable and user-friendly for real-time content management without needing to modify the code manually.

Additionally, I would improve the UI experience of the admin panel by adding image previews, validation messages, and better organization for managing tabs and sliders efficiently.

Overall, I focused on building a working solution that satisfies the requirements while keeping the code readable, responsive, and maintainable.


2. How would you track down a performance issue in production? Have you ever had to do this?

If I face a performance issue in production, I first try to understand exactly where the issue is happening before making any changes. I usually start by checking whether the slowdown is coming from the frontend, backend, database, or server itself. Instead of directly jumping into fixing, I prefer analyzing the root cause properly.

For frontend-related issues, I use browser developer tools to inspect page load time, network requests, console errors, and large files that may affect performance. I check whether images are optimized, if there are unnecessary scripts loading, or if too many DOM updates are happening on the page.

For backend issues, I review server logs and database queries to identify slow responses or repeated operations. If a query is taking too much time, I work on optimizing it using better query structure or indexing. I also check if there are unnecessary API calls or data being loaded multiple times.

One performance issue I handled was related to a website becoming very slow after adding a new dynamic section that fetched large amounts of data from the database on every page load. The older codebase was also using some deprecated PHP functions and inefficient queries, which increased the server response time significantly.

Initially, users experienced slow loading pages, especially during peak usage hours. To identify the issue, I checked browser network requests, monitored database query execution time, and reviewed server logs. After analyzing the problem, I found that repeated database calls and outdated functions were causing unnecessary processing on the server.

To fix the issue, I replaced the deprecated functions with optimized and updated approaches, reduced unnecessary database queries, implemented proper query optimization, and compressed large image assets used on the page. After these improvements, the website loading speed improved noticeably and the user experience became much smoother.

I believe performance optimization is not only about fixing slow pages, but also about improving the overall user experience and making the application more efficient and reliable.



3. Please describe yourself using JSON.

```json
{
  "personal_information": {
    "full_name": "Arunkumar",
    "education": "Master of Computer Applications (MCA)",
    "current_role": "Web Developer",
    "experience": "2+ Years"
  },

  "technical_skills": {
    "frontend": [
      "HTML5",
      "CSS3",
      "JavaScript",
      "Bootstrap",
      "Tailwind CSS",
      "Basic React.js"
    ],
    "backend": [
      "PHP",
      "Node.js with Express",
      "Basic Python"
    ],
    "database": [
      "MySQL"
    ],
    "design_tools": [
      "Figma",
      "Canva"
    ],
    "development_tools": [
      "WAMP Server",
      "cPanel"
    ]
  },

  "areas_of_interest": [
    "Frontend Development",
    "Backend Development",
    "Web Application Development"
  ],

  "strengths": [
    "Backend Development",
    "Logical Thinking",
    "Problem Solving",
    "Quick Adaptability"
  ],

  "soft_skills": [
    "Time Management",
    "Leadership Quality",
    "Team Collaboration",
    "Communication Skills"
  ],

  "languages_known": [
    "Tamil",
    "English",
    "Telugu"
  ],

  "current_responsibilities": {
    "designation": "Web Developer",
    "responsibilities": [
      "Developing and maintaining websites",
      "Managing and maintaining admission software",
      "Fixing bugs and improving application performance",
      "Creating responsive and user-friendly web interfaces",
      "Handling backend functionality and database operations"
    ]
  },

  "achievements": [
    "NCC C Certificate Holder"
  ],

  "hobbies_and_interests": [
    "Playing Cricket",
    "Listening to Music"
  ],

  "career_goal": {
    "short_term_goal": "To strengthen my expertise in both frontend and backend development",
    "long_term_goal": "To achieve a higher position in a reputed company and eventually start my own startup company"
  },

  "work_style": {
    "type": "Dedicated and goal-oriented developer",
    "approach": [
      "Focused on continuous learning",
      "Interested in building scalable web applications",
      "Prefers practical problem solving",
      "Works well individually and in team environments"
    ]
  }
}
