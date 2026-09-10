CRYMA – Product Landing Page

1. Introduction

What is a Product Landing Page?

A Product Landing Page is a webpage created to introduce and promote a product or service. It provides important information about the product and encourages visitors to take an action such as shopping, signing up, or contacting the business.

Why are Landing Pages Important for Businesses?

Landing pages are important because they give businesses a simple and organized way to present their products and services. A well-designed landing page can help attract customers, build trust, show important information, and encourage users to interact with the business.

Purpose of the Project

The purpose of this project is to create a responsive product landing page for CRYMA, an ecommerce shopping concept. Through this project, I applied what I learned about Laravel Blade Components, Tailwind CSS, responsive web design, and user interface design.

2. Objectives

The objectives I accomplished during this activity are:

Create a complete product landing page using Laravel.

Apply Tailwind CSS for styling and responsive layouts.

Learn how to create and use reusable Blade Components.

Apply responsive design for desktop, tablet, and mobile devices.

Improve my understanding of UI/UX principles.

Create a consistent color palette, typography, buttons, and cards.

Organize project files using a proper folder structure.

Use Git and GitHub to manage and submit the project.

Document the development process through screenshots.

3. Responsive Web Design

Responsive Web Design is the process of creating a website that adjusts properly to different screen sizes and devices. In this project, I made the CRYMA landing page responsive so that it can be viewed on desktop, tablet, and mobile screens.

Mobile-First Design

Mobile-first design means designing the interface with smaller screens in mind before adjusting it for larger screens. This helps make sure that the important content remains accessible and easy to use on mobile devices.

Responsive Breakpoints

I used Tailwind CSS responsive utility classes to adjust the layout depending on the screen size. For example, classes such as md: and lg: were used to change spacing, columns, and element sizes on larger screens.

Example:

<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">

This allows the layout to use one column on smaller screens, two columns on medium screens, and three columns on larger screens.

Flexbox

Flexbox was used to arrange elements horizontally and vertically. I used it for parts of the navigation bar, buttons, cards, and other sections where elements need to be aligned properly.

Example:

<div class="flex items-center gap-4">

CSS Grid

CSS Grid was used to organize multiple cards and sections into columns. It helped me create a cleaner and more responsive layout.

Example:

<div class="grid grid-cols-1 md:grid-cols-3 gap-6">

User Experience (UX)

User Experience focuses on making the website easy and comfortable to use. In my project, I used clear navigation, readable text, consistent buttons, organized sections, and responsive layouts to make the CRYMA landing page easier to understand.

Importance of Responsive Design

Responsive design is important in modern web applications because users access websites using different devices and screen sizes. A responsive website provides a better experience and prevents users from having difficulty viewing or interacting with the content.

4. Tailwind CSS

Tailwind CSS is a utility-first CSS framework that allows me to style elements directly using predefined utility classes.

Utility-First CSS

Instead of creating many custom CSS classes, Tailwind allows me to combine utility classes for spacing, colors, typography, borders, and layouts.

Example from my project:

<a class="rounded-xl bg-white px-6 py-3 font-semibold text-[#0F6260]">
    Start Shopping →
</a>

The classes define the button's border radius, background color, padding, font weight, and text color.

Advantages of Tailwind CSS

I used Tailwind CSS because it made the design process faster and easier. Some of its advantages are:

Easy to apply styles directly to elements.

Provides responsive utility classes.

Makes spacing and sizing more consistent.

Helps create modern UI designs quickly.

Reduces the need for writing separate CSS for every element.

Responsive Utility Classes

Tailwind provides responsive prefixes such as sm:, md:, lg:, and xl:.

Example:

<h1 class="text-3xl sm:text-4xl lg:text-6xl">
    Your Shopping, Your Way.
</h1>

The heading changes its size depending on the screen width.

Component Styling

I also used Tailwind CSS inside my Blade Components. This allowed me to keep the styling of repeated elements consistent.

For example, my feature cards use classes for:

Background

Border

Padding

Rounded corners

Shadows

Hover effects

Text styling

5. Blade Components

Blade Components are reusable parts of a Laravel Blade interface. They allow me to separate repeated UI elements into individual files instead of writing the same code multiple times.

Why Reusable Components Improve Maintainability

Reusable components make the project easier to maintain because I only need to update the component file when I want to change a repeated design.

For example, instead of creating every feature card manually, I created a reusable:

feature-card.blade.php

and used it multiple times on the Features section.

Benefits of Modular UI Development

Using modular components helped me:

Keep the code organized.

Avoid repeating the same HTML.

Make changes easier.

Keep designs consistent.

Reuse components in different parts of the project.

Blade Components Used

My project contains the following components:

components/
├── button.blade.php
├── feature-card.blade.php
├── footer.blade.php
├── hero.blade.php
├── navbar.blade.php
├── pricing-card.blade.php
└── testimonial-card.blade.php

Sample Blade Component

Example of how I used the Feature Card component:

<x-feature-card
    icon="🚚"
    title="Fast Delivery"
    description="Get your orders delivered quickly and safely."
/>

The same component can be reused with different information without rewriting the whole card structure.

Blade Components Folder Screenshot



6. User Interface Design

For the CRYMA landing page, I focused on keeping the design simple, modern, and consistent.

Color Palette

The main color of the website is a dark teal/green color. I used lighter teal shades as supporting colors and white for backgrounds and text contrast.

The main colors include:

Dark Teal – used for the navbar, hero, CTA, and footer.

Light Teal – used for accents and feature icons.

White – used for cards, buttons, and backgrounds.

Gray – used for secondary text and borders.

Typography

I used a clean and readable font style throughout the website. Different font sizes and weights were used to create a clear visual hierarchy between headings, descriptions, and buttons.

Iconography

Icons were used to make important features easier to recognize. For example, the Features section uses icons for Fast Delivery, Secure Payment, Easy Shopping, Order Tracking, and Customer Support.

Button Styles

The buttons use consistent rounded corners, spacing, font weight, and colors. Primary buttons use stronger colors while secondary buttons use lighter or outlined styles.

Card Design

Cards are used for the Features, Pricing, and Testimonials sections. I used rounded corners, borders, shadows, and consistent spacing to make the cards visually organized.

Layout Consistency

I maintained similar spacing, typography, colors, and rounded corners throughout the different sections. This makes the website feel like one complete design instead of separate pages.

These design choices improve the user experience because users can easily recognize important elements and navigate through the page.

7. Folder Structure

The project is organized into different folders based on the purpose of each file.

week05-product-landing-page/
├── resources/
│   └── views/
│       ├── layouts/
│       ├── components/
│       └── pages/
├── public/
├── screenshots/
└── documentation/

resources/views/layouts

This folder contains the main Blade layout used by the website. It contains the common structure such as the navigation bar, main content area, and footer.

resources/views/components

This folder contains the reusable Blade Components used throughout the project, such as the navbar, hero, feature cards, pricing cards, testimonials, and footer.

resources/views/pages

This folder is intended for page-specific Blade files. It helps separate complete pages from reusable components.

public

This folder contains publicly accessible files such as images and other assets used by the website.

screenshots

This folder contains screenshots documenting the design, responsive layouts, project structure, Blade Components, and GitHub repository.

documentation

This folder is used for documentation files and the before-and-after comparison images required for the project.

8. Screenshots

The following screenshots were taken to document my project:

Screenshot

Description

03-Desktop-Layout.png

Desktop version of the landing page

04-Tablet-Layout.png

Tablet version of the landing page

05-Mobile-Layout.png

Mobile version of the landing page

06-Navigation-Bar.png

Navigation Bar

07-Hero-Section.png

Hero Section

08-Features-Section.png

Features Section

09-Pricing-Cards.png

Pricing Section

10-Testimonials.png

Testimonials Section

11-Footer.png

Footer Section

13-Blade-Components.png

Blade Components Folder

14-GitHub-Repository.png

GitHub Repository

15-Product-Showcase.png

Product Showcase with Dashboard and Mobile View

Desktop View



Tablet View



Mobile View



Navigation Bar



Hero Section



Features Section



Pricing Section



Testimonials



Footer



GitHub Repository



Product Showcase



9. Design Requirements

For the design of my CRYMA landing page, I followed a simple and modern design system.

I maintained consistent spacing, typography, colors, button styles, and card designs throughout the website. I used a limited teal, white, and gray color palette to keep the interface clean and harmonious.

I also made sure that text and buttons have enough contrast against their backgrounds so that the content remains readable.

The design was created specifically for this project and was not intended to directly copy an existing website.

10. Before-and-After Comparison

The before-and-after comparison shows how the CRYMA interface developed during the activity.

Before

The initial version was a basic layout with minimal styling. It served as the starting point for organizing the content and structure of the landing page.



After

The final version has a more polished and responsive interface. I added proper colors, spacing, typography, cards, buttons, icons, responsive layouts, product previews, testimonials, pricing cards, and other UI improvements.



The comparison shows the improvement from the initial layout to the final responsive CRYMA product landing page.

11. GitHub Repository

I used Git and GitHub to keep track of my project files and changes. The project was pushed to the main branch after completing the landing page and documentation screenshots.

The latest commit added the remaining project screenshots, including the Blade Components, GitHub Repository, and Product Showcase screenshots.

Latest Commit:

314c285 - Added new project screenshots

GitHub Repository Screenshot



12. Conclusion

This activity helped me understand how to create a complete responsive landing page using Laravel Blade Components and Tailwind CSS. I learned how reusable components can make a project more organized and easier to maintain.

I also learned how responsive design, proper spacing, consistent colors, typography, and UI elements can improve the overall user experience. Finally, using Git and GitHub helped me practice managing and documenting my project properly.
