<!DOCTYPE html>

<html class="dark" lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <title>Login - Financial Consulting</title>
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700;800&amp;display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
  <script id="tailwind-config">
    tailwind.config = {
      darkMode: "class",
      theme: {
        extend: {
          colors: {
            "primary": "#136dec",
            "background-light": "#f6f7f8",
            "background-dark": "#101822",
          },
          fontFamily: {
            "display": ["Manrope", "sans-serif"]
          },
          borderRadius: {
            "DEFAULT": "0.25rem",
            "lg": "0.5rem",
            "xl": "0.75rem",
            "full": "9999px"
          },
        },
      },
    }
  </script>
  <style>
    body {
      min-height: max(884px, 100dvh);
    }
  </style>
</head>

<body class="bg-background-light dark:bg-background-dark font-display">
  <div class="relative flex min-h-screen w-full flex-col items-center justify-center bg-background-light dark:bg-background-dark p-4">
    <div class="w-full max-w-sm">
      <!-- Logo -->
      <div class="mb-8 flex justify-center">
        <div class="flex h-16 w-16 items-center justify-center rounded-xl bg-primary">
          <span class="material-symbols-outlined text-4xl text-white">
            monitoring
          </span>
        </div>
      </div>
      <!-- Headline and Body Text -->
      <div class="text-center">
        <h1 class="font-display text-3xl font-bold tracking-tight text-slate-900 dark:text-white">Welcome Back</h1>
        <p class="mt-2 font-display text-base leading-normal text-slate-600 dark:text-slate-400">Sign in to your account</p>
      </div>
      <!-- Form -->
      <form id="form-login" action="/auth" method="post">
        <div class="mt-8 space-y-6">
          <!-- Email Field -->
          <div class="flex flex-col">
            <label class="mb-2 font-display text-sm font-medium text-slate-700 dark:text-slate-300" for="email">Email</label>
            <input name="email" class="form-input h-12 w-full rounded-lg border border-slate-300 bg-white p-3 font-display text-base text-slate-900 placeholder:text-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-600 dark:bg-slate-800 dark:text-white dark:placeholder:text-slate-500 dark:focus:border-primary" id="email" placeholder="Enter your email address" type="email" />
          </div>
          <!-- Password Field -->
          <div class="flex flex-col">
            <label class="mb-2 font-display text-sm font-medium text-slate-700 dark:text-slate-300" for="password">Password</label>
            <div class="relative flex w-full items-stretch">
              <input name="password" class="form-input h-12 w-full flex-1 rounded-lg rounded-r-none border-r-0 border-slate-300 bg-white p-3 font-display text-base text-slate-900 placeholder:text-slate-400 focus:border-primary focus:outline-none focus:ring-2 focus:ring-primary/20 dark:border-slate-600 dark:bg-slate-800 dark:text-white dark:placeholder:text-slate-500 dark:focus:border-primary" id="password" placeholder="Enter your password" type="password" />
              <button class="flex items-center justify-center rounded-r-lg border border-l-0 border-slate-300 bg-white px-3 text-slate-400 hover:text-slate-600 dark:border-slate-600 dark:bg-slate-800 dark:text-slate-500 dark:hover:text-slate-300" type="button">
                <span class="material-symbols-outlined text-xl">
                  visibility
                </span>
              </button>
            </div>
          </div>
          <div class="text-right">
            <a class="font-display text-sm font-medium text-primary hover:underline" href="#">Forgot Password?</a>
          </div>
          <!-- Login Button -->
          <button type="submit" class="flex h-12 w-full items-center justify-center rounded-lg bg-primary px-6 font-display text-base font-semibold text-white transition-colors hover:bg-primary/90 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background-dark">
            Login
          </button>
      </form>
      <!-- Forgot Password Link -->
    </div>
    <!-- Sign Up Link -->
    <div class="mt-8 text-center">
      <p class="font-display text-sm text-slate-600 dark:text-slate-400">
        Don't have an account? <a class="font-semibold text-primary hover:underline" href="#">Sign Up</a>
      </p>
    </div>
  </div>
  </div>
</body>

</html>