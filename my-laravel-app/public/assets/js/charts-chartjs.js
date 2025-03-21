document.addEventListener("DOMContentLoaded", function(o) {
    // Define isDarkStyle variable if not already defined
    if (typeof isDarkStyle === 'undefined') {
        window.isDarkStyle = document.documentElement.getAttribute("data-bs-theme") === "dark";
    }

    var r = "#836AF9",
        t = "#ffe800",
        e = "#28dac6",
        a = "#EDF1F4",
        l = "#2B9AFF",
        i = "#84D0FF";
    let n, d, s, p, c, C, b, y;
    b = (isDarkStyle, n = window.Helpers.getCssVar("paper-bg", !0), d = window.Helpers.getCssVar("heading-color", !0), s = window.Helpers.getCssVar("secondary-color", !0), c = window.Helpers.getCssVar("body-color", !0), p = window.Helpers.getCssVar("border-color", !0), y = window.Helpers.getCssVar("primary", !0), C = window.Helpers.getCssVar("info", !0), window.Helpers.getCssVar("danger", !0));
    document.querySelectorAll(".chartjs").forEach(function(o) {
        o.height = o.dataset.height
    });
    var g = document.getElementById("barChart"),
        g = (g && new Chart(g, {
            type: "bar",
            data: {
                labels: ["7/12", "8/12", "9/12", "10/12", "11/12", "12/12", "13/12", "14/12", "15/12", "16/12", "17/12", "18/12", "19/12"],
                datasets: [{
                    data: [275, 90, 190, 205, 125, 85, 55, 87, 127, 150, 230, 280, 190],
                    backgroundColor: e,
                    borderColor: "transparent",
                    maxBarThickness: 15,
                    borderRadius: {
                        topRight: 15,
                        topLeft: 15
                    }
                }]
            },
            options: {
                responsive: !0,
                maintainAspectRatio: !1,
                animation: {
                    duration: 500
                },
                plugins: {
                    tooltip: {
                        rtl: isRtl,
                        backgroundColor: n,
                        titleColor: d,
                        bodyColor: c,
                        borderWidth: 1,
                        borderColor: p
                    },
                    legend: {
                        display: !1
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: p,
                            drawBorder: !1,
                            borderColor: p
                        },
                        ticks: {
                            color: s
                        }
                    },
                    y: {
                        min: 0,
                        max: 400,
                        grid: {
                            color: p,
                            drawBorder: !1,
                            borderColor: p
                        },
                        ticks: {
                            stepSize: 100,
                            color: s
                        }
                    }
                }
            }
        }), document.getElementById("horizontalBarChart")),
        g = (g && new Chart(g, {
            type: "bar",
            data: {
                labels: ["MON", "TUE", "WED ", "THU", "FRI", "SAT", "SUN"],
                datasets: [{
                    data: [710, 350, 470, 580, 230, 460, 120],
                    backgroundColor: C,
                    borderColor: "transparent",
                    maxBarThickness: 15
                }]
            },
            options: {
                indexAxis: "y",
                responsive: !0,
                maintainAspectRatio: !1,
                animation: {
                    duration: 500
                },
                elements: {
                    bar: {
                        borderRadius: {
                            topRight: 15,
                            bottomRight: 15
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        rtl: isRtl,
                        backgroundColor: n,
                        titleColor: d,
                        bodyColor: c,
                        borderWidth: 1,
                        borderColor: p
                    },
                    legend: {
                        display: !1
                    }
                },
                scales: {
                    x: {
                        min: 0,
                        grid: {
                            color: p,
                            borderColor: p
                        },
                        ticks: {
                            color: s
                        }
                    },
                    y: {
                        grid: {
                            borderColor: p,
                            display: !1,
                            drawBorder: !1
                        },
                        ticks: {
                            color: s
                        }
                    }
                }
            }
        }), document.getElementById("lineChart")),
        g = (g && new Chart(g, {
            type: "line",
            data: {
                labels: [0, 10, 20, 30, 40, 50, 60, 70, 80, 90, 100, 110, 120, 130, 140],
                datasets: [{
                    data: [80, 150, 180, 270, 210, 160, 160, 202, 265, 210, 270, 255, 290, 360, 375],
                    label: "Europe",
                    borderColor: b,
                    tension: .5,
                    pointStyle: "circle",
                    backgroundColor: b,
                    fill: !1,
                    pointRadius: 1,
                    pointHoverRadius: 5,
                    pointHoverBorderWidth: 5,
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: n,
                    pointHoverBackgroundColor: b
                }, {
                    data: [80, 125, 105, 130, 215, 195, 140, 160, 230, 300, 220, 170, 210, 200, 280],
                    label: "Asia",
                    borderColor: y,
                    tension: .5,
                    pointStyle: "circle",
                    backgroundColor: y,
                    fill: !1,
                    pointRadius: 1,
                    pointHoverRadius: 5,
                    pointHoverBorderWidth: 5,
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: n,
                    pointHoverBackgroundColor: y
                }, {
                    data: [80, 99, 82, 90, 115, 115, 74, 75, 130, 155, 125, 90, 140, 130, 180],
                    label: "Africa",
                    borderColor: t,
                    tension: .5,
                    pointStyle: "circle",
                    backgroundColor: t,
                    fill: !1,
                    pointRadius: 1,
                    pointHoverRadius: 5,
                    pointHoverBorderWidth: 5,
                    pointBorderColor: "transparent",
                    pointHoverBorderColor: n,
                    pointHoverBackgroundColor: t
                }]
            },
            options: {
                responsive: !0,
                maintainAspectRatio: !1,
                scales: {
                    x: {
                        grid: {
                            color: p,
                            drawBorder: !1,
                            borderColor: p
                        },
                        ticks: {
                            color: s
                        }
                    },
                    y: {
                        scaleLabel: {
                            display: !0
                        },
                        min: 0,
                        max: 400,
                        ticks: {
                            color: s,
                            stepSize: 100
                        },
                        grid: {
                            color: p,
                            drawBorder: !1,
                            borderColor: p
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        rtl: isRtl,
                        backgroundColor: n,
                        titleColor: d,
                        bodyColor: c,
                        borderWidth: 1,
                        borderColor: p
                    },
                    htmlLegend: {
                        containerID: "legendContainer"
                    },
                    legend: {
                        display: !1
                    }
                }
            },
            plugins: [LegendUtils.htmlLegendPlugin]
        }), document.getElementById("radarChart")),
        g = (g && ((x = g.getContext("2d").createLinearGradient(0, 0, 0, 150)).addColorStop(0, "rgba(85, 85, 255, 0.9)"), x.addColorStop(1, "rgba(151, 135, 255, 0.8)"), (u = g.getContext("2d").createLinearGradient(0, 0, 0, 150)).addColorStop(0, "rgba(255, 85, 184, 0.9)"), u.addColorStop(1, "rgba(255, 135, 135, 0.8)"), new Chart(g, {
            type: "radar",
            data: {
                labels: ["STA", "STR", "AGI", "VIT", "CHA", "INT"],
                datasets: [{
                    label: "Donté Panlin",
                    data: [25, 59, 90, 81, 60, 82],
                    fill: !0,
                    pointStyle: "dash",
                    backgroundColor: u,
                    borderColor: "transparent",
                    pointBorderColor: "transparent"
                }, {
                    label: "Mireska Sunbreeze",
                    data: [40, 100, 40, 90, 40, 90],
                    fill: !0,
                    pointStyle: "dash",
                    backgroundColor: x,
                    borderColor: "transparent",
                    pointBorderColor: "transparent"
                }]
            },
            options: {
                responsive: !0,
                maintainAspectRatio: !1,
                animation: {
                    duration: 500
                },
                scales: {
                    r: {
                        ticks: {
                            maxTicksLimit: 1,
                            display: !1,
                            color: s
                        },
                        grid: {
                            color: p
                        },
                        angleLines: {
                            color: p
                        },
                        pointLabels: {
                            color: s
                        }
                    }
                },
                plugins: {
                    legend: {
                        rtl: isRtl,
                        position: "top",
                        labels: {
                            padding: 25,
                            color: c
                        }
                    },
                    tooltip: {
                        rtl: isRtl,
                        backgroundColor: n,
                        titleColor: d,
                        bodyColor: c,
                        borderWidth: 1,
                        borderColor: p
                    }
                }
            }
        })), document.getElementById("polarChart")),
        u = (g && new Chart(g, {
            type: "polarArea",
            data: {
                labels: ["Africa", "Asia", "Europe", "America", "Antarctica", "Australia"],
                datasets: [{
                    label: "Population (millions)",
                    backgroundColor: [r, t, "#FF8132", "#299AFF", "#4F5D70", e],
                    data: [19, 17.5, 15, 13.5, 11, 9],
                    borderWidth: 0
                }]
            },
            options: {
                responsive: !0,
                maintainAspectRatio: !1,
                animation: {
                    duration: 500
                },
                scales: {
                    r: {
                        ticks: {
                            display: !1,
                            color: s
                        },
                        grid: {
                            display: !1
                        }
                    }
                },
                plugins: {
                    tooltip: {
                        rtl: isRtl,
                        backgroundColor: n,
                        titleColor: d,
                        bodyColor: c,
                        borderWidth: 1,
                        borderColor: p
                    },
                    legend: {
                        rtl: isRtl,
                        position: "bottom",
                        markers: {
                            size: "5px"
                        },
                        labels: {
                            usePointStyle: !0,
                            padding: 25,
                            boxWidth: 8,
                            boxHeight: 8,
                            color: c
                        }
                    }
                }
            }
        }), document.getElementById("bubbleChart")),
        x = (u && new Chart(u, {
            type: "bubble",
            data: {
                animation: {
                    duration: 1e4
                },
                datasets: [{
                    label: "Dataset 1",
                    backgroundColor: r,
                    borderColor: r,
                    data: [{
                        x: 20,
                        y: 74,
                        r: 10
                    }, {
                        x: 10,
                        y: 110,
                        r: 5
                    }, {
                        x: 30,
                        y: 165,
                        r: 7
                    }, {
                        x: 40,
                        y: 200,
                        r: 20
                    }, {
                        x: 90,
                        y: 185,
                        r: 7
                    }, {
                        x: 50,
                        y: 240,
                        r: 7
                    }, {
                        x: 60,
                        y: 275,
                        r: 10
                    }, {
                        x: 70,
                        y: 305,
                        r: 5
                    }, {
                        x: 80,
                        y: 325,
                        r: 4
                    }, {
                        x: 100,
                        y: 310,
                        r: 5
                    }, {
                        x: 110,
                        y: 240,
                        r: 5
                    }, {
                        x: 120,
                        y: 270,
                        r: 7
                    }, {
                        x: 130,
                        y: 300,
                        r: 6
                    }]
                }, {
                    label: "Dataset 2",
                    backgroundColor: t,
                    borderColor: t,
                    data: [{
                        x: 30,
                        y: 72,
                        r: 5
                    }, {
                        x: 40,
                        y: 110,
                        r: 7
                    }, {
                        x: 20,
                        y: 135,
                        r: 6
                    }, {
                        x: 10,
                        y: 160,
                        r: 12
                    }, {
                        x: 50,
                        y: 285,
                        r: 5
                    }, {
                        x: 60,
                        y: 235,
                        r: 5
                    }, {
                        x: 70,
                        y: 275,
                        r: 7
                    }, {
                        x: 80,
                        y: 290,
                        r: 4
                    }, {
                        x: 90,
                        y: 250,
                        r: 10
                    }, {
                        x: 100,
                        y: 220,
                        r: 7
                    }, {
                        x: 120,
                        y: 230,
                        r: 4
                    }, {
                        x: 110,
                        y: 320,
                        r: 15
                    }, {
                        x: 130,
                        y: 330,
                        r: 7
                    }]
                }]
            },
            options: {
                responsive: !0,
                maintainAspectRatio: !1,
                scales: {
                    x: {
                        min: 0,
                        max: 140,
                        grid: {
                            color: p,
                            drawBorder: !1,
                            borderColor: p
                        },
                        ticks: {
                            stepSize: 10,
                            color: s
                        }
                    },
                    y: {
                        min: 0,
                        max: 400,
                        grid: {
                            color: p,
                            drawBorder: !1,
                            borderColor: p
                        },
                        ticks: {
                            stepSize: 100,
                            color: s
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: !1
                    },
                    tooltip: {
                        rtl: isRtl,
                        backgroundColor: n,
                        titleColor: d,
                        bodyColor: c,
                        borderWidth: 1,
                        borderColor: p
                    }
                }
            }
        }), document.getElementById("lineAreaChart")),
        g = (x && new Chart(x, {
            type: "line",
            data: {
                labels: ["7/12", "8/12", "9/12", "10/12", "11/12", "12/12", "13/12", "14/12", "15/12", "16/12", "17/12", "18/12", "19/12", "20/12", ""],
                datasets: [{
                    label: "Pasig City Branch",
                    data: [40, 55, 45, 75, 65, 55, 70, 60, 100, 98, 90, 120, 125, 140, 155],
                    tension: 0,
                    fill: !0,
                    backgroundColor: l,
                    pointStyle: "circle",
                    borderColor: "transparent",
                    pointRadius: .5,
                    pointHoverRadius: 5,
                    pointHoverBorderWidth: 5,
                    pointBorderColor: "transparent",
                    pointHoverBackgroundColor: l,
                    pointHoverBorderColor: n
                }, {
                    label: "San Mateo Rizal Branch",
                    data: [70, 85, 75, 150, 100, 140, 110, 105, 160, 150, 125, 190, 200, 240, 275],
                    tension: 0,
                    fill: !0,
                    backgroundColor: i,
                    pointStyle: "circle",
                    borderColor: "transparent",
                    pointRadius: .5,
                    pointHoverRadius: 5,
                    pointHoverBorderWidth: 5,
                    pointBorderColor: "transparent",
                    pointHoverBackgroundColor: i,
                    pointHoverBorderColor: n
                }, {
                    label: "Cainta Rizal Branch",
                    data: [240, 195, 160, 215, 185, 215, 185, 200, 250, 210, 195, 250, 235, 300, 315],
                    tension: 0,
                    fill: !0,
                    backgroundColor: a,
                    pointStyle: "circle",
                    borderColor: "transparent",
                    pointRadius: .5,
                    pointHoverRadius: 5,
                    pointHoverBorderWidth: 5,
                    pointBorderColor: "transparent",
                    pointHoverBackgroundColor: a,
                    pointHoverBorderColor: n
                }]
            },
            options: {
                responsive: !0,
                maintainAspectRatio: !1,
                plugins: {
                    htmlLegend: {
                        containerID: "legendContainer1"
                    },
                    legend: {
                        display: !1
                    },
                    tooltip: {
                        rtl: isRtl,
                        backgroundColor: n,
                        titleColor: d,
                        bodyColor: c,
                        borderWidth: 1,
                        borderColor: p
                    }
                },
                scales: {
                    x: {
                        grid: {
                            color: "transparent",
                            borderColor: p
                        },
                        ticks: {
                            color: s
                        }
                    },
                    y: {
                        min: 0,
                        max: 400,
                        grid: {
                            color: "transparent",
                            borderColor: p
                        },
                        ticks: {
                            stepSize: 100,
                            color: s
                        }
                    }
                }
            },
            plugins: [LegendUtils.htmlLegendPlugin]
        }), document.getElementById("doughnutChart")),
        u = (g && new Chart(g, {
            type: "doughnut",
            data: {
                labels: ["Tablet", "Mobile", "Desktop"],
                datasets: [{
                    data: [10, 10, 80],
                    backgroundColor: [e, "#FDAC34", y],
                    borderWidth: 0,
                    pointStyle: "rectRounded"
                }]
            },
            options: {
                responsive: !0,
                animation: {
                    duration: 500
                },
                cutout: "68%",
                plugins: {
                    legend: {
                        display: !1
                    },
                    tooltip: {
                        callbacks: {
                            label: function(o) {
                                return " " + (o.labels || "") + " : " + o.parsed + " %"
                            }
                        },
                        rtl: isRtl,
                        backgroundColor: n,
                        titleColor: d,
                        bodyColor: c,
                        borderWidth: 1,
                        borderColor: p
                    }
                }
            }
        }), document.getElementById("scatterChart"));
    u && new Chart(u, {
        type: "scatter",
        data: {
            datasets: [{
                label: "iPhone",
                data: [{
                    x: 72,
                    y: 225
                }, {
                    x: 81,
                    y: 270
                }, {
                    x: 90,
                    y: 230
                }, {
                    x: 103,
                    y: 305
                }, {
                    x: 103,
                    y: 245
                }, {
                    x: 108,
                    y: 275
                }, {
                    x: 110,
                    y: 290
                }, {
                    x: 111,
                    y: 315
                }, {
                    x: 109,
                    y: 350
                }, {
                    x: 116,
                    y: 340
                }, {
                    x: 113,
                    y: 260
                }, {
                    x: 117,
                    y: 275
                }, {
                    x: 117,
                    y: 295
                }, {
                    x: 126,
                    y: 280
                }, {
                    x: 127,
                    y: 340
                }, {
                    x: 133,
                    y: 330
                }],
                backgroundColor: y,
                borderColor: "transparent",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 5
            }, {
                label: "Samsung Note",
                data: [{
                    x: 13,
                    y: 95
                }, {
                    x: 22,
                    y: 105
                }, {
                    x: 17,
                    y: 115
                }, {
                    x: 19,
                    y: 130
                }, {
                    x: 21,
                    y: 125
                }, {
                    x: 35,
                    y: 125
                }, {
                    x: 13,
                    y: 155
                }, {
                    x: 21,
                    y: 165
                }, {
                    x: 25,
                    y: 155
                }, {
                    x: 18,
                    y: 190
                }, {
                    x: 26,
                    y: 180
                }, {
                    x: 43,
                    y: 180
                }, {
                    x: 53,
                    y: 202
                }, {
                    x: 61,
                    y: 165
                }, {
                    x: 67,
                    y: 225
                }],
                backgroundColor: t,
                borderColor: "transparent",
                pointRadius: 5
            }, {
                label: "OnePlus",
                data: [{
                    x: 70,
                    y: 195
                }, {
                    x: 72,
                    y: 270
                }, {
                    x: 98,
                    y: 255
                }, {
                    x: 100,
                    y: 215
                }, {
                    x: 87,
                    y: 240
                }, {
                    x: 94,
                    y: 280
                }, {
                    x: 99,
                    y: 300
                }, {
                    x: 102,
                    y: 290
                }, {
                    x: 110,
                    y: 275
                }, {
                    x: 111,
                    y: 250
                }, {
                    x: 94,
                    y: 280
                }, {
                    x: 92,
                    y: 340
                }, {
                    x: 100,
                    y: 335
                }, {
                    x: 108,
                    y: 330
                }],
                backgroundColor: e,
                borderColor: "transparent",
                pointBorderWidth: 2,
                pointHoverBorderWidth: 2,
                pointRadius: 5
            }]
        },
        options: {
            responsive: !0,
            maintainAspectRatio: !1,
            animation: {
                duration: 800
            },
            plugins: {
                legend: {
                    display: !1
                },
                htmlLegend: {
                    containerID: "legendContainer2"
                },
                tooltip: {
                    rtl: isRtl,
                    backgroundColor: n,
                    titleColor: d,
                    bodyColor: c,
                    borderWidth: 1,
                    borderColor: p
                }
            },
            scales: {
                x: {
                    min: 0,
                    max: 140,
                    grid: {
                        color: p,
                        drawTicks: !1,
                        drawBorder: !1,
                        borderColor: p
                    },
                    ticks: {
                        stepSize: 10,
                        color: s
                    }
                },
                y: {
                    min: 0,
                    max: 400,
                    grid: {
                        color: p,
                        drawTicks: !1,
                        drawBorder: !1,
                        borderColor: p
                    },
                    ticks: {
                        stepSize: 100,
                        color: s
                    }
                }
            }
        },
        plugins: [LegendUtils.htmlLegendPlugin]
    })
});