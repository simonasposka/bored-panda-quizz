# Bored Panda Task
Create a simple quiz form consisting of three pages: an intro page, quiz page, and ending page.
The quiz should provide results based on the user's responses.

### Intro Page:

- Provide a brief overview of the quiz, the total number of questions, and a "Start Quiz" button.

### Quiz Page:

- Present one question at a time from a predefined set of questions.
- Each question should come with a list of multiple answers.
- Users must select a single answer for each question.
- Establish a scoring system on the user's answers.

### Ending Page:

- Display one of several pre-determined results corresponding to the user's score.

### Tech Stack:

- Feel free to use your preferred tech stack.

### Examples of Quizzes:

- https://www.buzzfeed.com/quizzes
- https://www.playbuzz.com/quizzes/entertainment

---

## Project link

https://bored-panda-quizz-1d9df4349b72.herokuapp.com/

## Explanation

When building this system I’ve decided to use a monolithic approach, mainly because of these reasons:

1. With monolithic approach, it’s easier to implement server-side rendering.

   SSR allows to have faster initial page load, better SEO, improved caching and has reduced Time to Interactive (TTI) - all crucial to BoredPanda webpage;

2. It’s easier to build monolithic simplest approach when building MVPs / POC;
3. It’s perfectly suited for such task, given the provided context.

For the tech stack, I’ve decided to use latest versions of PHP, MySQL and Laravel for the backend, Vue2, Intertia.js and Tailwind CSS for the frontend.

The application has two routes:

- `/` returns all quizzes
- `/quizzess/{slug}` returns a quizz if found, 404 page otherwise

Results are cached for 24 hours.

All calculations (determining score, picking an outcome) are implemented on the client side.

### Database Schema

![db_schema.png](https://github.com/simonasposka/bored-panda-quizz/blob/main/db_schema.png?raw=true)

### Testing

I’ve written unit tests for `Quizz` model, `QuizzTransformerFactoryTest` and `PickCorrectAnswerTransformerTest`.

I’ve also written integration tests for `ImageRepository` class.

I’ve decided to not write more tests, because they would look pretty much the same as the ones mentioned.

In a real world application, I would write tests for all of the `Services/` and `Repositories/`.

For the frontend, I’ve decided to do manual testing.

## Tasks to do after POC

- implement quizz pagination for `/` route
- write missing unit / integration tests
- write E2E tests for the frontend
- serve content (images/webpages) using CDN (Cloudflare)

## Reflection

During the task, I had to decide if I should build a monolith or split the codebase into API and Single page application with server side rendering. I’ve found a Javascript library called Intertia.js which allows to rapidly build monolithic codebases with Laravel for backend and Vue for frontend. I believe it was a perfect choice for such application.

When working on database schema, I’ve tried to make Quizz entity flexible. There currently can be quizzes of two types: OUTCOME or PICK_CORRECT.

When quizz has a type of OUTCOME, each answer will vote towards that outcome. At the end of the quizz, the system calculates outcome with the most votes and choses it as the determined outcome.

When quizz has a type of PICK_CORRECT, each question will have a corresponding correct answer. Each correct answer increments score by 1. At the end of the quizz, the total score is shown.

I’ve hosted the webapp on Heroku for demo purposes only. In a real world application, I would probably use AWS.

---

## Installation
Make sure Docker is running in the background, then run:
```shell
make start
```
which will start the containers, run the migrations, seed the database and compile the frontend assets.

To stop the dev environment, run:
```shell
make stop
```


## Running tests
```shell
make run-tests
```
