# Mobile App Product Page

First Code Institute Milestone Project: User-Centric Frontend Development
This Website is dedicated to an iOS Calendar App which I'm currently developing. The page promotes the App and its features, provides a user manual and contact information.

The live website can be found here:
c-ronics.com/basicday/index.html
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
Use of a common tree structure type: Navigation bar and 4 sections which are all accessible from anywhere on the page, answering the following questions:
- Home (Why?)
- Key Features (What?)
- Manual  (How?)
- Contact form and personal information (Who?)
- App Store download link (Where?)

### Skeleton
[Wireframes](/Wireframes.pdf)

### Surface
The purpouse of the App is to make it easier to use a calendar on the iPhone. Therefore, the design is also very simple and clear, with minimum color and animation, directing the viewer's focus on product images and the text. The color theme follows the following pattern:
- Overall theme: dark
- Normal text and titles: white
- Links: white, orange on hover
- Emphazised: orange
- Footer: white background, blue font color (same as the section background). The footer is only very subtile, because the focus of the site should be on the app and it's features, and not on the information about the website.
- at least one element in every section to fade from darkgray to orange when opening the site
- The colors orange, white and dark grey follow the color theme of the App-icon/logo
- Fonts: Blinker and Merriweather. I choose a serif font (Merriweather) for the titles simply because most other pages currently don't, making it stand out more.

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

- 4 main sections

- Navigation menu on top

- Contact information in the footer

- Contact from - sends the information to an email address

- Modal pop-up when clicking/tapping on the App Store link

- Responsive desgn: Besides minor changes (eg. font size), there are some major layout changes depending on the viewport size:
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

All browsers display the pages correctly, with one exception: Microsoft Edge displays the page features.html slightly differently. Read the next section (Code) for details.

Further on, I asked a friend to check the webside online, click on all the links, and get back to me if he sees any issues. In addition, I added the project to the pair-programming Slack group of Code Institute.

### Code

I used the W3C Validation services for both HTML and CSS to get the code tested. The following errors appear:
- CSS: The "shape outside" property does not exist. *I kept it in the code, it works in all tested browsers except Edge. Therefore, it affects only a very small percentage of users, and it's not a major design element*
- HTML: illegal character in query: |. *I ignored the message because it works, and because this is the convention given by Google Fonts*

***
## Deployment

A) In a first step, I deployed the priject on GitHub Pages:
1. Opening the repository on GitHub
2. Going to the settings
3. Under the section "GitHub Pages", selecting the master branch as the source.
    https://andreasjost.github.io/CI-MS1-Mobile-App-Product-Page/index.html

The 'Send'-button in the form doesn't work on GitHub Pages, therefore I made a second step:

B) I deployed the project on another host (https://www.hetzner.de), taking the following steps:
1. Downloaded the project from GitHub:    
    1.1 Opening the repository on GitHub    
    1.2 Clicking the button "Clone or download" > download ZIP  
    1.3 Unpacking the ZIP-File

2. Uploaded the project to the host     
    2.1 Opening the host's server in Cyberduck (cyberduck.io)   
    2.2 Creating a new folder on the root directory (basicday) and dragged all the files from the downloaded ZIP-file

***
## Challenges

During the development process, I faced the following challenges which I will take into consideration for upcoming projects:

- I should have made more use of relative units (rem and em) instead of pixels. That would make it easier to build the site responsive, with less media queries. After the project was almost finished, it would have taken too much time to change.

- More considerate use of margin and padding: for a lot of elements, margins and padding produces the same visual result. Therefore, the code should be more consistent when using those attributes.

- Keep going back to the purpouse of the site to make design decisions would save time. For example: The Website presents a mobile app. Therefore, a lot of users view the site on a mobile browser - the site doesn't need to squeeze information on the desktop view, like in the following example of features.html:
    ![before vs. after](http://c-ronics.com/course/before-after.png)

- Another challenge was to design the website *and* write code for the actual App in SWIFT, mostly because the design goals are completely different:
    - App: As much information as possible on one screen, so scrolling is not necessary. Make buttons just big enough for finger taps.
    - Website: Make the desing appealing, without overloading the user with information. Leave enough space to breathe and the use of bigger fonts

    Also, I had some timing issues: I needed screenshots for the web site, but needed more time to write enough code to produce usable screenshots 


***
## Credits

### Media

The rail track pictures on the home page are from pixabay (pixabay.com)

### Code

Besides the Code Institute Walkthrough projects, I often consulted stackoverflow.com and w3schools.com for tips.

A special thanks also to my Code Institute Mentor Adegbenga Adeye for all the useful input.

Code from tutorial used: (https://www.youtube.com/watch?v=FTOT73CJ6pM by Hassan Sheikh) for creating a php file for sending a HTML form to an email address.