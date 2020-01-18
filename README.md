# Mobile App Product Page

Code Institute Milestone Project: 1 - User-Centric Frontend Development

This Website is dedicated to an iOS Calendar App which I'm currently developing. The page promotes the App and its features, provides a user manual and contact information.

The live website can be found here:
(http://www.c-ronics.com/basicday/index.html)
***
## UX
### User Stories:
- Customer: I want to know what the App can do, and what the difference is from existing products
- App Store: A product website is required by Apple in order to submit an App in the App Store.

### Strategy
Effectively communicate the goal of a specific Calendar App to potential customers, and provide more in-depth information for customers who downloaded the App already.

### Scope
Explain why this App is easier and faster to use than other calendar Apps, present the key features, provide an online and downloadable user manual, Provide a contact form for feedback and updates, and show an App Store download link. 

### Structure
Use of a common tree structure: Navigation bar and 4 pages which are all accessible from anywhere on the website, answering the following questions:
- Home (*Why?*)
- Key Features (*What?*)
- Manual  (*How?*)
- Contact form and personal information (*Who?*)
- App Store download link (*Where?*)

### Skeleton
[Wireframes](/Wireframes.pdf)

### Surface
The purpouse of the App is to make it easier to use a calendar on the iPhone. Therefore, the design is also very simple and clear, with minimum color and animation, directing the viewer's focus on product images and text. The color theme follows the following pattern:
- Overall theme: Dark
- Normal text and titles: White
- Links: White, orange on hover
- Highlighted: Orange
- Footer: White background, blue font color (same as the section background). The footer is only very subtile, because the focus of the site should be on the app and it's features, and not on the information about the website.
- at least one element in every section to fade from darkgray to orange when opening the site
- The colors orange, white and dark grey follow the color theme of the App-icon/logo
- Fonts: Blinker and Merriweather

***
## Technologies

- HTML
- CSS
- Bootstrap 4.4.1 (getbootstrap.com)
- Google Fonts (fonts.google.com)
- Font Awesome 5.11.2 (fontawesome.com)
- GitPod (gitpod.io) IDE
- GitHub (github.com) for sharing
- Git (for version control)

***
## Features

### Current features

- 4 main pages

- Navigation menu on top to switch between the 4 pages

- Contact information in the footer

- Contact form - sends the information to an email address

- Modal pop-up when clicking/tapping on the App Store link

- Responsive design: Besides minor changes (eg. font size), there are some major layout changes depending on the viewport size:
    ![table](http://c-ronics.com/course/responsiveDesignTable.png)


### Planned features

- Active link to the App Store, and updated screenshots, once the App becomes available

- A news section at the bottom of the homepage (index.html), eg. for release notes

- Add pricing information


***
## Testing

### Site

I've used the following Operating Systems and Browsers to check if the Website displays correctly:

- Windwows 10
    - Chrome (Indluding the built-in dev tools and device toolbar, checking the different mobile devices in both screen orientations)
    - Firefox
    - Edge 

- MacOS Catalina
    - Chrome (also tests in the dev-tools)
    - Firefox
    - Safari

- iOS
    - Safari

I also tested the links:
- The "PDF Manual" link opens in a new tab
- A click on "Download on the App store" opens a modal view with a link to the contact page. Except if the button is klicked on the contact page.
- Navigation works, both on a desktop and on mobile
- A click on the logo opens index.html
- A klick on the mail icon in the Footer opens the email client
- A click on the LinkedIn button in the Footer opens my LinkedIn page in a new tab

All browsers display the pages correctly, with one exception: Microsoft Edge displays the page features.html slightly differently. Read the next section (Code) for details.

Further on, I asked a friend to check the webside online, click on all the links, and get back to me if there are any issues. In addition, I added the project to the pair-programming Slack group of Code Institute.

### Code

I used the W3C Validation services for both HTML and CSS to get the code tested. The following errors appear:
- CSS: The "shape outside" property does not exist. *I kept it in the code, it works in all tested browsers except Edge. Therefore, it affects only a very small percentage of users, and it's not a major design element*
- HTML: Illegal character in query: |. *I ignored the message because it works, and because this is the convention given by Google Fonts*

***
## Deployment

### Steps taken to deploy the projects

A) In a first step, I deployed the project on GitHub Pages:
1. Open the repository on GitHub
2. Go to "Settings"
3. Under the section "GitHub Pages", select the master branch as the source.
    https://andreasjost.github.io/CI-MS1-Mobile-App-Product-Page/index.html

The 'Send'-button in the form doesn't work on GitHub Pages, therefore I made a second step:

B) I deployed the project on another host (https://www.hetzner.de), taking the following steps:
1. Download the project from GitHub:    
    1.1 Open the repository on GitHub    
    1.2 Click the button "Clone or download" > download ZIP  
    1.3 Unpack the ZIP-File

2. Upload the project to the host     
    2.1 Open the host's server in Cyberduck (cyberduck.io)   
    2.2 Create a new folder on the root directory (basicday) and dragged all the files from the downloaded ZIP-file

### Create a local repository

This is the GitHub link to the repository: https://github.com/andreasjost/CI-MS1-Mobile-App-Product-Page

Follow this steps to make a local clone of the repository:
https://help.github.com/en/github/creating-cloning-and-archiving-repositories/cloning-a-repository

***
## Challenges

During the development process, I faced the following challenges which I will take into consideration for upcoming projects:

- I should have made more use of relative units (rem and em) instead of pixels. That would make it easier to build the site responsive, with less media queries. After the project was almost finished, it would have taken too much time to change.

- More considerate use of margin and padding: for a lot of elements, margins and padding produces the same visual result. Therefore, the code should be more consistent when using those attributes.

- Keep going back to the purpouse of the site to make design decisions would save time. For example: The Website presents a mobile App. Therefore, a lot of users view the site on a mobile browser - the site doesn't need to squeeze information on the desktop view, as shown in the following example of "features.html":
    ![before vs. after](http://c-ronics.com/course/before-after.png)

- Another challenge was to design the website *and* write code for the actual App in SWIFT, mostly because the design goals are completely different:
    - App: As much information as possible on one screen, so scrolling is not necessary. Make buttons just big enough for finger taps.
    - Website: Make the desing appealing, without overloading the user with information. Leaving enough space to breathe and using bigger fonts

    Also, I had some timing issues: I needed screenshots for the web site, but needed more time to write enough code to produce usable screenshots. Therefore, it would be better to start with the web page once the development of the presented product is at a later stage


***
## Credits

### Media

The rail track pictures on the home page are from pixabay (pixabay.com)

### Code

Besides the Code Institute Walkthrough projects, I often consulted stackoverflow.com and w3schools.com for tips.

A special thanks also to my Code Institute Mentor Adegbenga Adeye for all the useful input.

Code from tutorial used: (https://www.youtube.com/watch?v=FTOT73CJ6pM by Hassan Sheikh) for creating a php file for sending a HTML form to an email address.