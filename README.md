# Mobile App Product Page

First Code Institute Milestone Project: User-Centric Frontend Development
This Website is dedicated to an iOS Calendar App which I'm currently developing. The page promotes the App and its features, provides a user manual and contact information.

***
## UX
### User Stories:
- Customer: I want to know what the app can do, and what the difference is from existing products
- App Store: A product website is required by Apple in order to submit an App in the App Store.

### Strategy
Effectively communicate the goal of a specific Calendar App to potential customers, and provide more in-depth information for customers who downloaded the App already.

### Scope
Explain why this App is easier and faster to use than other calendar Apps, present the key features of the app, provide an online and downloadable user manual, Provide a contact form for feedback and updates, and show an App Store download link. 

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
The App is meant to make it easier to use a Calendar on the iPhone. Therefore, the design is also very simple and clear, with minimum color and animation, which directs the viewer's focus on product images and the actual text. The color theme follows the following pattern:
- theme: dark
- Normal text and titles: (nearly) white
- Links: white, orange on hover
- emphazised: orange
- at least one element in every section to fade from darkgray to orange when opening the site
the colors orange, white and dark grey follow the color theme of the App program-icon
- Fonts: Blinker and Merriweather. I choose a serif font for the titles simply because most other pages currently don't, to make it stand out more.

***
## Technologies

- HTML
- CSS
- Bootstrap 4.4.1 (getbootstrap.com)
- Google Fonts (fonts.google.com)
- Font Awesome 5.11.2 (fontawesome.com)
- Gitpod (gitpod.io) IDE
- Github (github.com) for sharing, and git for version control

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

### Code

I used the W3C Validation services for both HTML and CSS to get the code tested.

I've used the following Operating Systems and Browsers to check if the Website displays correctly:

- Windwows 10
    - Chrome (Indluding the built-in dev tools and device toolbar, checking the different mobile devices in both screen orientations)
    - Firefox

- MacOS
    - Chrome (also tests in the dev-tools)
    - Firefox
    - Safari

- iOS
    - Safari

***
## Deployment

***
## Challenges

During the development process, I faced the following challenges which I will take into consideration for upcoming projects:

- I should have made more use of relative units (rem and em) instead of pixels. That would make it easier to build the site responsive, with less media queries. After the project was almost finished, it would have taken too much time to change

- More considerate use of margin and padding: for a lot of elements, margins and padding produces the same visual result. Therefore, the code should be more consistent when using those attributes.

- Keep going back to the purpouse of the site to make design decisions would save time. For example: The Website presents a mobile app. Therefore, a lot of users view the site on a mobile browser - the site doesn't need to squeeze information on the desktop view, like in the example here of features.html:
    ![before vs. after](http://c-ronics.com/course/before-after.png)

- Another challenge was to design the website *and* write code for the actual App in SWIFT, mostly because the design goals are completely different:
    - App: As much information as possible on one screen, so scrolling is not necessary. Make buttons just big enough for finger tapps.
    - Website: Make the desing appealing, without overloading the user with information. Leave enough space to breathe and the use of bigger fonts

    Also, I had some timing issues: I needed screenshots for the web site, but needed more time to write enough code to produce usable screenshots 


***
## Credits

### Media

The rail track pictures on the home page are from pixabay (pixabay.com)

### Code

Besides the Code Institute Walkthrough projects, I often consulted stackoverflow.com and w3schools.com for tips.

Code from tutorial used: (https://www.youtube.com/watch?v=FTOT73CJ6pM by Hassan Sheikh) for creating a php file for sending a HTML form to an email address.