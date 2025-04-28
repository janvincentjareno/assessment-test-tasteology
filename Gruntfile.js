module.exports = function(grunt) {
  // Project configuration.
  grunt.initConfig({
    // Read package.json (optional, but useful if you want banner/version info)
    pkg: grunt.file.readJSON('package.json'),

    // LESS compilation
    less: {
      development: {
        options: {
          compress: false,      // set to true to minify
          sourceMap: true       // generate source maps
        },
        files: {
          // destination : source
          'public/css/style.css': 'less/style.less'
        }
      }
    },

    // Watch task
    watch: {
      styles: {
        files: ['less/**/*.less'],
        tasks: ['less'],
        options: {
          spawn: false,
          atBegin: true        // run less at startup
        }
      }
    }
  });

  // Load the plugins
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['less']);
  grunt.registerTask('dev', ['watch']);
};
