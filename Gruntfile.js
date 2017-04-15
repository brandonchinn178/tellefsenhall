module.exports = function (grunt) {
    grunt.loadNpmTasks("grunt-contrib-sass");
    grunt.loadNpmTasks("grunt-contrib-watch");

    grunt.initConfig({
        sass: {
            dist: {
                files: [
                    {
                        src: "tellefsenhall/scss/style.scss",
                        dest: "tellefsenhall/style.css"
                    },
                    {
                        expand: true,
                        cwd: "tellefsenhall/scss/",
                        src: ["*.scss", "!style.scss"],
                        dest: "tellefsenhall/css/",
                        ext: ".css"
                    }
                ]
            }
        },
        watch: {
            sass: {
                files: "tellefsenhall/scss/*.scss",
                tasks: "sass"
            }
        }
    });

    grunt.registerTask("build", ["sass"]);
    grunt.registerTask("default", ["build", "watch"]);
};