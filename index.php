<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Anton|Lobster|Open+Sans|Pacifico|Roboto">
  <link rel="stylesheet" href="./assets/css/style.css" />
  <title>FreeCodeCamp - Survey Form</title>
</head>
<body>
  <main class="wrapper">
    <h1 id='title'>Survey Form</h1>
    <div class="formContainer">
      <p id="description">Let us know how you feel. How did we do?</p>
      <form action="" id="survey-form">
        <label id="name-label" for="name">
          <div class="label-left">
            * Name:
          </div>
          <div class="label-right">
            <input type="text" name="name" id="name" required placeholder="Enter your name" />
          </div>
        </label>
        <label for="email" id="email-label">
          <div class="label-left">
            * Email:
          </div>
          <div class="label-right">
            <input type="email" name="email" id="email" required placeholder="Enter your name" />
          </div>
        </label>
        <label for="age" id="number-label">
          <div class="label-left">
            * Age:
          </div>
          <div class="label-right">
            <input type="number" name="age" id="number" placeholder="Age" min="1" max="150" required />
          </div>
        </label>
        <label for="Gender" id="gender-label">
          <div class="label-left">
            Sex/Gender:
          </div>
          <div class="label-right">
            <select id="dropdown">
              <option value="">
                Sex/Gender
              </option>
              <option value="male">
                Male
              </option>
              <option value="female">
                Female
              </option>
              <option value="non-binary">
                Non-Binary
              </option>
            </select>
          </div>
        </label>
        <label for="recommend">
          <div class="label-left">
            How likely is it you would recommend us to friends or family?
          </div>
          <div class="label-right">
            <span><input type="radio" name="recommend" value="1" /> Very likely</span>
            <span><input type="radio" name="recommend" value="2" /> Maybe</span>
            <span><input type="radio" name="recommend" value="3" /> Not likely</span>
          </div>
        </label>
        <label for="services">
          <div class="label-left">
            What services of ours do you use?
          </div>
          <div class="label-right">
            <span><input type="checkbox" name="services" value="Lawn Services" /> Lawn Services</span>
            <span><input type="checkbox" name="services" value="Sprinkler Install" /> Sprinkler Install</span>
            <span><input type="checkbox" name="services" value="Sprinkler Repair" /> Sprinkler Repair</span>
            <span><input type="checkbox" name="services" value="Land Scaping" /> Land Scaping</span>
            <span><input type="checkbox" name="services" value="Lawn Clean Out" /> Lawn Clean Out</span>
            <span><input type="checkbox" name="services" value="Other" /> Other</span>
          </div>
        </label>
        <label for="comment">
          <div class="label-left">
            Anything else we could do?
          </div>
          <div class="label-right">
            <textarea name="comment" placeholder="Enter your comment here..."></textarea>
          </div>
        </label>
        <button id="submit" name="submit">Submit</button>
      </form>
    </div>
  </main>
  <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
</body>
</html>
