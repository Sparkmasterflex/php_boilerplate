module.exports = (grunt) ->
  grunt.initConfig
    pkg: grunt.file.readJSON("package.json")
    coffee:
      glob_to_multiple:
        expand: true
        flatten: false
        cwd: "javascripts/coffee"
        src: ["**/*.coffee"]
        dest: "javascripts/src"
        ext: ".js"

    uglify:
      build:
        options:
          mangle: false
        files:
          "javascripts/production.js": ["javascripts/vendor/*.js", "javascripts/src/**/*.js"]


    imagemin:
      dynamic:
        files: [
          expand: true
          cwd: "images/"
          src: ["**/*.{png,jpg,gif}"]
          dest: "images/build/"
        ]


    cssmin:
      combine:
        files:
          "stylesheets/main.css": ["stylesheets/vendor/*.css", "stylesheets/src/*.css"]

    sass:
      dist:
        files: [
          expand: true
          cwd: "stylesheets/scss"
          src: ["**/*.scss"]
          dest: "stylesheets/src"
          ext: ".css"
        ]

    watch:
      options:
        livereload: true

      css:
        files: ["stylesheets/scss/*.scss"]
        tasks: "sass"
        options:
          spawn: false

      coffee:
        files: ["javascripts/coffee/*.coffee"]
        tasks: "coffee"

      html:
        files: [
          "index.php"
          "index.html"
          "**/*.php"
          "**/*.html"
        ]

  grunt.loadNpmTasks "grunt-contrib-uglify"
  grunt.loadNpmTasks "grunt-contrib-cssmin"
  grunt.loadNpmTasks "grunt-contrib-imagemin"
  grunt.loadNpmTasks "grunt-contrib-watch"
  grunt.loadNpmTasks "grunt-contrib-sass"
  grunt.loadNpmTasks "grunt-contrib-coffee"

  # 4. Where we tell Grunt what to do when we type "grunt" into the terminal.
  grunt.registerTask "default", ["coffee", "sass", "watch"]
  grunt.registerTask "build_production", ["coffee", "uglify", "sass", "cssmin", "imagemin"]