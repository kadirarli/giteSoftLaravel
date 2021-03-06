TODO List

- [x] BACKEND
  - [x] Implement RESTful API to manage films
    Films should have fields:
    Name
    Description
    Realease Date
    Rating
    Ticket Price
    Country
    Genre
    Photo
  - [x] All fields are required, rating is on scale from 1 to 5, 1 film can have several genres.
- [x] FRONTEND 
  - [x] create frontend page /films/ to show all films through API. 1 film per 1 page. 
  - [x] add redirect from / to /films/
  - [x] implement frontend page /films/film-slug-name to show specific film. URL should have film's slug.
  - [x] implement frontend page /films/create with form to create new film. 
  - [x] add registration and authentication
  - [x] add possibility to post comments for each films. Fields "Name" and "Comment" are required. 
  - [x] only registered users can post comments
- [x] RESULT
  - [x] A new git repository should be created for the project and all changes should be committed progressively. We should be able to easily see the parts you coded and differentiate it from framework code. Please add the public repository url to your reply.
  - [x] in comment to that task provide summary of your work in English. Please, write it in formal way as if you're talking with client
  - [x] stop timer when you finish your work
- [x]NOTES:
  - [x] Create DB seeder with 3 films and 1 comment for every film
  
Additional:
  
- [ ] When creating the film, the genre should also be added.
- [ ] API and WEB routes must be the same.
- [ ] A web page can be created for registration and authentication.
- [ ] Comments can be list below film.