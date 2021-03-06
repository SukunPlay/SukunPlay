/*
 Highcharts JS v8.0.4 (2020-03-10)

 Force directed graph module

 (c) 2010-2019 Torstein Honsi

 License: www.highcharts.com/license
*/
(function (h) {
    "object" === typeof module && module.exports ? (h["default"] = h, module.exports = h) : "function" === typeof define && define.amd ? define("highcharts/modules/networkgraph", ["highcharts"], function (l) {
        h(l);
        h.Highcharts = l;
        return h
    }) : h("undefined" !== typeof Highcharts ? Highcharts : void 0)
})(function (h) {
    function l(g, a, c, d) {
        g.hasOwnProperty(a) || (g[a] = d.apply(null, c))
    }

    h = h ? h._modules : {};
    l(h, "mixins/nodes.js", [h["parts/Globals.js"], h["parts/Point.js"], h["parts/Utilities.js"]], function (g, a, c) {
        var d = c.defined, e = c.extend,
            f = c.find, m = c.pick;
        g.NodesMixin = {
            createNode: function (d) {
                function a(b, k) {
                    return f(b, function (b) {
                        return b.id === k
                    })
                }

                var b = a(this.nodes, d), k = this.pointClass;
                if (!b) {
                    var p = this.options.nodes && a(this.options.nodes, d);
                    b = (new k).init(this, e({className: "highcharts-node", isNode: !0, id: d, y: 1}, p));
                    b.linksTo = [];
                    b.linksFrom = [];
                    b.formatPrefix = "node";
                    b.name = b.name || b.options.id;
                    b.mass = m(b.options.mass, b.options.marker && b.options.marker.radius, this.options.marker && this.options.marker.radius, 4);
                    b.getSum = function () {
                        var k =
                            0, d = 0;
                        b.linksTo.forEach(function (b) {
                            k += b.weight
                        });
                        b.linksFrom.forEach(function (b) {
                            d += b.weight
                        });
                        return Math.max(k, d)
                    };
                    b.offset = function (k, d) {
                        for (var a = 0, p = 0; p < b[d].length; p++) {
                            if (b[d][p] === k) return a;
                            a += b[d][p].weight
                        }
                    };
                    b.hasShape = function () {
                        var k = 0;
                        b.linksTo.forEach(function (b) {
                            b.outgoing && k++
                        });
                        return !b.linksTo.length || k !== b.linksTo.length
                    };
                    this.nodes.push(b)
                }
                return b
            }, generatePoints: function () {
                var a = this.chart, c = {};
                g.Series.prototype.generatePoints.call(this);
                this.nodes || (this.nodes = []);
                this.colorCounter =
                    0;
                this.nodes.forEach(function (b) {
                    b.linksFrom.length = 0;
                    b.linksTo.length = 0;
                    b.level = b.options.level
                });
                this.points.forEach(function (b) {
                    d(b.from) && (c[b.from] || (c[b.from] = this.createNode(b.from)), c[b.from].linksFrom.push(b), b.fromNode = c[b.from], a.styledMode ? b.colorIndex = m(b.options.colorIndex, c[b.from].colorIndex) : b.color = b.options.color || c[b.from].color);
                    d(b.to) && (c[b.to] || (c[b.to] = this.createNode(b.to)), c[b.to].linksTo.push(b), b.toNode = c[b.to]);
                    b.name = b.name || b.id
                }, this);
                this.nodeLookup = c
            }, setData: function () {
                this.nodes &&
                (this.nodes.forEach(function (d) {
                    d.destroy()
                }), this.nodes.length = 0);
                g.Series.prototype.setData.apply(this, arguments)
            }, destroy: function () {
                this.data = [].concat(this.points || [], this.nodes);
                return g.Series.prototype.destroy.apply(this, arguments)
            }, setNodeState: function (d) {
                var c = arguments, b = this.isNode ? this.linksTo.concat(this.linksFrom) : [this.fromNode, this.toNode];
                "select" !== d && b.forEach(function (b) {
                    b && b.series && (a.prototype.setState.apply(b, c), b.isNode || (b.fromNode.graphic && a.prototype.setState.apply(b.fromNode,
                        c), b.toNode && b.toNode.graphic && a.prototype.setState.apply(b.toNode, c)))
                });
                a.prototype.setState.apply(this, c)
            }
        }
    });
    l(h, "modules/networkgraph/integrations.js", [h["parts/Globals.js"]], function (g) {
        g.networkgraphIntegrations = {
            verlet: {
                attractiveForceFunction: function (a, c) {
                    return (c - a) / a
                }, repulsiveForceFunction: function (a, c) {
                    return (c - a) / a * (c > a ? 1 : 0)
                }, barycenter: function () {
                    var a = this.options.gravitationalConstant, c = this.barycenter.xFactor,
                        d = this.barycenter.yFactor;
                    c = (c - (this.box.left + this.box.width) / 2) * a;
                    d =
                        (d - (this.box.top + this.box.height) / 2) * a;
                    this.nodes.forEach(function (a) {
                        a.fixedPosition || (a.plotX -= c / a.mass / a.degree, a.plotY -= d / a.mass / a.degree)
                    })
                }, repulsive: function (a, c, d) {
                    c = c * this.diffTemperature / a.mass / a.degree;
                    a.fixedPosition || (a.plotX += d.x * c, a.plotY += d.y * c)
                }, attractive: function (a, c, d) {
                    var e = a.getMass(), f = -d.x * c * this.diffTemperature;
                    c = -d.y * c * this.diffTemperature;
                    a.fromNode.fixedPosition || (a.fromNode.plotX -= f * e.fromNode / a.fromNode.degree, a.fromNode.plotY -= c * e.fromNode / a.fromNode.degree);
                    a.toNode.fixedPosition ||
                    (a.toNode.plotX += f * e.toNode / a.toNode.degree, a.toNode.plotY += c * e.toNode / a.toNode.degree)
                }, integrate: function (a, c) {
                    var d = -a.options.friction, e = a.options.maxSpeed, f = (c.plotX + c.dispX - c.prevX) * d;
                    d *= c.plotY + c.dispY - c.prevY;
                    var m = Math.abs, g = m(f) / (f || 1);
                    m = m(d) / (d || 1);
                    f = g * Math.min(e, Math.abs(f));
                    d = m * Math.min(e, Math.abs(d));
                    c.prevX = c.plotX + c.dispX;
                    c.prevY = c.plotY + c.dispY;
                    c.plotX += f;
                    c.plotY += d;
                    c.temperature = a.vectorLength({x: f, y: d})
                }, getK: function (a) {
                    return Math.pow(a.box.width * a.box.height / a.nodes.length, .5)
                }
            },
            euler: {
                attractiveForceFunction: function (a, c) {
                    return a * a / c
                }, repulsiveForceFunction: function (a, c) {
                    return c * c / a
                }, barycenter: function () {
                    var a = this.options.gravitationalConstant, c = this.barycenter.xFactor,
                        d = this.barycenter.yFactor;
                    this.nodes.forEach(function (e) {
                        if (!e.fixedPosition) {
                            var f = e.getDegree();
                            f *= 1 + f / 2;
                            e.dispX += (c - e.plotX) * a * f / e.degree;
                            e.dispY += (d - e.plotY) * a * f / e.degree
                        }
                    })
                }, repulsive: function (a, c, d, e) {
                    a.dispX += d.x / e * c / a.degree;
                    a.dispY += d.y / e * c / a.degree
                }, attractive: function (a, c, d, e) {
                    var f = a.getMass(),
                        m = d.x / e * c;
                    c *= d.y / e;
                    a.fromNode.fixedPosition || (a.fromNode.dispX -= m * f.fromNode / a.fromNode.degree, a.fromNode.dispY -= c * f.fromNode / a.fromNode.degree);
                    a.toNode.fixedPosition || (a.toNode.dispX += m * f.toNode / a.toNode.degree, a.toNode.dispY += c * f.toNode / a.toNode.degree)
                }, integrate: function (a, c) {
                    c.dispX += c.dispX * a.options.friction;
                    c.dispY += c.dispY * a.options.friction;
                    var d = c.temperature = a.vectorLength({x: c.dispX, y: c.dispY});
                    0 !== d && (c.plotX += c.dispX / d * Math.min(Math.abs(c.dispX), a.temperature), c.plotY += c.dispY / d * Math.min(Math.abs(c.dispY),
                        a.temperature))
                }, getK: function (a) {
                    return Math.pow(a.box.width * a.box.height / a.nodes.length, .3)
                }
            }
        }
    });
    l(h, "modules/networkgraph/QuadTree.js", [h["parts/Globals.js"], h["parts/Utilities.js"]], function (g, a) {
        a = a.extend;
        var c = g.QuadTreeNode = function (d) {
            this.box = d;
            this.boxSize = Math.min(d.width, d.height);
            this.nodes = [];
            this.body = this.isInternal = !1;
            this.isEmpty = !0
        };
        a(c.prototype, {
            insert: function (d, a) {
                this.isInternal ? this.nodes[this.getBoxPosition(d)].insert(d, a - 1) : (this.isEmpty = !1, this.body ? a ? (this.isInternal =
                    !0, this.divideBox(), !0 !== this.body && (this.nodes[this.getBoxPosition(this.body)].insert(this.body, a - 1), this.body = !0), this.nodes[this.getBoxPosition(d)].insert(d, a - 1)) : (a = new c({
                    top: d.plotX,
                    left: d.plotY,
                    width: .1,
                    height: .1
                }), a.body = d, a.isInternal = !1, this.nodes.push(a)) : (this.isInternal = !1, this.body = d))
            }, updateMassAndCenter: function () {
                var a = 0, c = 0, f = 0;
                this.isInternal ? (this.nodes.forEach(function (d) {
                    d.isEmpty || (a += d.mass, c += d.plotX * d.mass, f += d.plotY * d.mass)
                }), c /= a, f /= a) : this.body && (a = this.body.mass, c = this.body.plotX,
                    f = this.body.plotY);
                this.mass = a;
                this.plotX = c;
                this.plotY = f
            }, divideBox: function () {
                var a = this.box.width / 2, e = this.box.height / 2;
                this.nodes[0] = new c({left: this.box.left, top: this.box.top, width: a, height: e});
                this.nodes[1] = new c({left: this.box.left + a, top: this.box.top, width: a, height: e});
                this.nodes[2] = new c({left: this.box.left + a, top: this.box.top + e, width: a, height: e});
                this.nodes[3] = new c({left: this.box.left, top: this.box.top + e, width: a, height: e})
            }, getBoxPosition: function (a) {
                var c = a.plotY < this.box.top + this.box.height /
                    2;
                return a.plotX < this.box.left + this.box.width / 2 ? c ? 0 : 3 : c ? 1 : 2
            }
        });
        g = g.QuadTree = function (a, e, f, g) {
            this.box = {left: a, top: e, width: f, height: g};
            this.maxDepth = 25;
            this.root = new c(this.box, "0");
            this.root.isInternal = !0;
            this.root.isRoot = !0;
            this.root.divideBox()
        };
        a(g.prototype, {
            insertNodes: function (a) {
                a.forEach(function (a) {
                    this.root.insert(a, this.maxDepth)
                }, this)
            }, visitNodeRecursive: function (a, c, f) {
                var d;
                a || (a = this.root);
                a === this.root && c && (d = c(a));
                !1 !== d && (a.nodes.forEach(function (a) {
                    if (a.isInternal) {
                        c && (d = c(a));
                        if (!1 === d) return;
                        this.visitNodeRecursive(a, c, f)
                    } else a.body && c && c(a.body);
                    f && f(a)
                }, this), a === this.root && f && f(a))
            }, calculateMassAndCenter: function () {
                this.visitNodeRecursive(null, null, function (a) {
                    a.updateMassAndCenter()
                })
            }
        })
    });
    l(h, "modules/networkgraph/layouts.js", [h["parts/Globals.js"], h["parts/Utilities.js"]], function (g, a) {
        var c = a.addEvent, d = a.clamp, e = a.defined, f = a.extend, h = a.isFunction, q = a.pick, n = a.setAnimation;
        a = g.Chart;
        g.layouts = {
            "reingold-fruchterman": function () {
            }
        };
        f(g.layouts["reingold-fruchterman"].prototype,
            {
                init: function (b) {
                    this.options = b;
                    this.nodes = [];
                    this.links = [];
                    this.series = [];
                    this.box = {x: 0, y: 0, width: 0, height: 0};
                    this.setInitialRendering(!0);
                    this.integration = g.networkgraphIntegrations[b.integration];
                    this.attractiveForce = q(b.attractiveForce, this.integration.attractiveForceFunction);
                    this.repulsiveForce = q(b.repulsiveForce, this.integration.repulsiveForceFunction);
                    this.approximation = b.approximation
                }, start: function () {
                    var b = this.series, a = this.options;
                    this.currentStep = 0;
                    this.forces = b[0] && b[0].forces || [];
                    this.initialRendering && (this.initPositions(), b.forEach(function (b) {
                        b.render()
                    }));
                    this.setK();
                    this.resetSimulation(a);
                    a.enableSimulation && this.step()
                }, step: function () {
                    var b = this, a = this.series, c = this.options;
                    b.currentStep++;
                    "barnes-hut" === b.approximation && (b.createQuadTree(), b.quadTree.calculateMassAndCenter());
                    b.forces.forEach(function (a) {
                        b[a + "Forces"](b.temperature)
                    });
                    b.applyLimits(b.temperature);
                    b.temperature = b.coolDown(b.startTemperature, b.diffTemperature, b.currentStep);
                    b.prevSystemTemperature =
                        b.systemTemperature;
                    b.systemTemperature = b.getSystemTemperature();
                    c.enableSimulation && (a.forEach(function (b) {
                        b.chart && b.render()
                    }), b.maxIterations-- && isFinite(b.temperature) && !b.isStable() ? (b.simulation && g.win.cancelAnimationFrame(b.simulation), b.simulation = g.win.requestAnimationFrame(function () {
                        b.step()
                    })) : b.simulation = !1)
                }, stop: function () {
                    this.simulation && g.win.cancelAnimationFrame(this.simulation)
                }, setArea: function (b, a, c, d) {
                    this.box = {left: b, top: a, width: c, height: d}
                }, setK: function () {
                    this.k = this.options.linkLength ||
                        this.integration.getK(this)
                }, addElementsToCollection: function (b, a) {
                    b.forEach(function (b) {
                        -1 === a.indexOf(b) && a.push(b)
                    })
                }, removeElementFromCollection: function (b, a) {
                    b = a.indexOf(b);
                    -1 !== b && a.splice(b, 1)
                }, clear: function () {
                    this.nodes.length = 0;
                    this.links.length = 0;
                    this.series.length = 0;
                    this.resetSimulation()
                }, resetSimulation: function () {
                    this.forcedStop = !1;
                    this.systemTemperature = 0;
                    this.setMaxIterations();
                    this.setTemperature();
                    this.setDiffTemperature()
                }, setMaxIterations: function (b) {
                    this.maxIterations = q(b, this.options.maxIterations)
                },
                setTemperature: function () {
                    this.temperature = this.startTemperature = Math.sqrt(this.nodes.length)
                }, setDiffTemperature: function () {
                    this.diffTemperature = this.startTemperature / (this.options.maxIterations + 1)
                }, setInitialRendering: function (b) {
                    this.initialRendering = b
                }, createQuadTree: function () {
                    this.quadTree = new g.QuadTree(this.box.left, this.box.top, this.box.width, this.box.height);
                    this.quadTree.insertNodes(this.nodes)
                }, initPositions: function () {
                    var b = this.options.initialPositions;
                    h(b) ? (b.call(this), this.nodes.forEach(function (b) {
                        e(b.prevX) ||
                        (b.prevX = b.plotX);
                        e(b.prevY) || (b.prevY = b.plotY);
                        b.dispX = 0;
                        b.dispY = 0
                    })) : "circle" === b ? this.setCircularPositions() : this.setRandomPositions()
                }, setCircularPositions: function () {
                    function b(a) {
                        a.linksFrom.forEach(function (a) {
                            g[a.toNode.id] || (g[a.toNode.id] = !0, f.push(a.toNode), b(a.toNode))
                        })
                    }

                    var a = this.box, c = this.nodes, d = 2 * Math.PI / (c.length + 1), e = c.filter(function (b) {
                        return 0 === b.linksTo.length
                    }), f = [], g = {}, h = this.options.initialPositionRadius;
                    e.forEach(function (a) {
                        f.push(a);
                        b(a)
                    });
                    f.length ? c.forEach(function (b) {
                        -1 ===
                        f.indexOf(b) && f.push(b)
                    }) : f = c;
                    f.forEach(function (b, c) {
                        b.plotX = b.prevX = q(b.plotX, a.width / 2 + h * Math.cos(c * d));
                        b.plotY = b.prevY = q(b.plotY, a.height / 2 + h * Math.sin(c * d));
                        b.dispX = 0;
                        b.dispY = 0
                    })
                }, setRandomPositions: function () {
                    function b(b) {
                        b = b * b / Math.PI;
                        return b -= Math.floor(b)
                    }

                    var a = this.box, c = this.nodes, d = c.length + 1;
                    c.forEach(function (c, k) {
                        c.plotX = c.prevX = q(c.plotX, a.width * b(k));
                        c.plotY = c.prevY = q(c.plotY, a.height * b(d + k));
                        c.dispX = 0;
                        c.dispY = 0
                    })
                }, force: function (b) {
                    this.integration[b].apply(this, Array.prototype.slice.call(arguments,
                        1))
                }, barycenterForces: function () {
                    this.getBarycenter();
                    this.force("barycenter")
                }, getBarycenter: function () {
                    var b = 0, a = 0, c = 0;
                    this.nodes.forEach(function (d) {
                        a += d.plotX * d.mass;
                        c += d.plotY * d.mass;
                        b += d.mass
                    });
                    return this.barycenter = {x: a, y: c, xFactor: a / b, yFactor: c / b}
                }, barnesHutApproximation: function (b, a) {
                    var c = this.getDistXY(b, a), d = this.vectorLength(c);
                    if (b !== a && 0 !== d) if (a.isInternal) if (a.boxSize / d < this.options.theta && 0 !== d) {
                        var k = this.repulsiveForce(d, this.k);
                        this.force("repulsive", b, k * a.mass, c, d);
                        var e = !1
                    } else e =
                        !0; else k = this.repulsiveForce(d, this.k), this.force("repulsive", b, k * a.mass, c, d);
                    return e
                }, repulsiveForces: function () {
                    var b = this;
                    "barnes-hut" === b.approximation ? b.nodes.forEach(function (a) {
                        b.quadTree.visitNodeRecursive(null, function (c) {
                            return b.barnesHutApproximation(a, c)
                        })
                    }) : b.nodes.forEach(function (a) {
                        b.nodes.forEach(function (c) {
                            if (a !== c && !a.fixedPosition) {
                                var d = b.getDistXY(a, c);
                                var k = b.vectorLength(d);
                                if (0 !== k) {
                                    var p = b.repulsiveForce(k, b.k);
                                    b.force("repulsive", a, p * c.mass, d, k)
                                }
                            }
                        })
                    })
                }, attractiveForces: function () {
                    var b =
                        this, a, c, d;
                    b.links.forEach(function (k) {
                        k.fromNode && k.toNode && (a = b.getDistXY(k.fromNode, k.toNode), c = b.vectorLength(a), 0 !== c && (d = b.attractiveForce(c, b.k), b.force("attractive", k, d, a, c)))
                    })
                }, applyLimits: function () {
                    var b = this;
                    b.nodes.forEach(function (a) {
                        a.fixedPosition || (b.integration.integrate(b, a), b.applyLimitBox(a, b.box), a.dispX = 0, a.dispY = 0)
                    })
                }, applyLimitBox: function (b, a) {
                    var c = b.radius;
                    b.plotX = d(b.plotX, a.left + c, a.width - c);
                    b.plotY = d(b.plotY, a.top + c, a.height - c)
                }, coolDown: function (b, a, c) {
                    return b - a *
                        c
                }, isStable: function () {
                    return .00001 > Math.abs(this.systemTemperature - this.prevSystemTemperature) || 0 >= this.temperature
                }, getSystemTemperature: function () {
                    return this.nodes.reduce(function (b, a) {
                        return b + a.temperature
                    }, 0)
                }, vectorLength: function (b) {
                    return Math.sqrt(b.x * b.x + b.y * b.y)
                }, getDistR: function (b, a) {
                    b = this.getDistXY(b, a);
                    return this.vectorLength(b)
                }, getDistXY: function (a, c) {
                    var b = a.plotX - c.plotX;
                    a = a.plotY - c.plotY;
                    return {x: b, y: a, absX: Math.abs(b), absY: Math.abs(a)}
                }
            });
        c(a, "predraw", function () {
            this.graphLayoutsLookup &&
            this.graphLayoutsLookup.forEach(function (a) {
                a.stop()
            })
        });
        c(a, "render", function () {
            function a(a) {
                a.maxIterations-- && isFinite(a.temperature) && !a.isStable() && !a.options.enableSimulation && (a.beforeStep && a.beforeStep(), a.step(), d = !1, c = !0)
            }

            var c = !1;
            if (this.graphLayoutsLookup) {
                n(!1, this);
                for (this.graphLayoutsLookup.forEach(function (a) {
                    a.start()
                }); !d;) {
                    var d = !0;
                    this.graphLayoutsLookup.forEach(a)
                }
                c && this.series.forEach(function (a) {
                    a && a.layout && a.render()
                })
            }
        })
    });
    l(h, "modules/networkgraph/draggable-nodes.js",
        [h["parts/Globals.js"], h["parts/Utilities.js"]], function (g, a) {
            var c = a.addEvent;
            a = g.Chart;
            g.dragNodesMixin = {
                onMouseDown: function (a, c) {
                    c = this.chart.pointer.normalize(c);
                    a.fixedPosition = {chartX: c.chartX, chartY: c.chartY, plotX: a.plotX, plotY: a.plotY};
                    a.inDragMode = !0
                }, onMouseMove: function (a, c) {
                    if (a.fixedPosition && a.inDragMode) {
                        var d = this.chart, e = d.pointer.normalize(c);
                        c = a.fixedPosition.chartX - e.chartX;
                        e = a.fixedPosition.chartY - e.chartY;
                        if (5 < Math.abs(c) || 5 < Math.abs(e)) c = a.fixedPosition.plotX - c, e = a.fixedPosition.plotY -
                            e, d.isInsidePlot(c, e) && (a.plotX = c, a.plotY = e, a.hasDragged = !0, this.redrawHalo(a), this.layout.simulation ? this.layout.resetSimulation() : (this.layout.setInitialRendering(!1), this.layout.enableSimulation ? this.layout.start() : this.layout.setMaxIterations(1), this.chart.redraw(), this.layout.setInitialRendering(!0)))
                    }
                }, onMouseUp: function (a, c) {
                    a.fixedPosition && a.hasDragged && (this.layout.enableSimulation ? this.layout.start() : this.chart.redraw(), a.inDragMode = a.hasDragged = !1, this.options.fixedDraggable || delete a.fixedPosition)
                },
                redrawHalo: function (a) {
                    a && this.halo && this.halo.attr({d: a.haloPath(this.options.states.hover.halo.size)})
                }
            };
            c(a, "load", function () {
                var a = this, e, f, g;
                a.container && (e = c(a.container, "mousedown", function (d) {
                    var e = a.hoverPoint;
                    e && e.series && e.series.hasDraggableNodes && e.series.options.draggable && (e.series.onMouseDown(e, d), f = c(a.container, "mousemove", function (a) {
                        return e && e.series && e.series.onMouseMove(e, a)
                    }), g = c(a.container.ownerDocument, "mouseup", function (a) {
                        f();
                        g();
                        return e && e.series && e.series.onMouseUp(e,
                            a)
                    }))
                }));
                c(a, "destroy", function () {
                    e()
                })
            })
        });
    l(h, "modules/networkgraph/networkgraph.src.js", [h["parts/Globals.js"], h["parts/Point.js"], h["parts/Utilities.js"]], function (g, a, c) {
        "";
        var d = c.addEvent, e = c.css, f = c.defined, h = c.pick;
        c = c.seriesType;
        var l = g.seriesTypes, n = g.Series, b = g.dragNodesMixin;
        c("networkgraph", "line", {
            stickyTracking: !1,
            inactiveOtherPoints: !0,
            marker: {enabled: !0, states: {inactive: {opacity: .3, animation: {duration: 50}}}},
            states: {inactive: {linkOpacity: .3, animation: {duration: 50}}},
            dataLabels: {
                formatter: function () {
                    return this.key
                },
                linkFormatter: function () {
                    return this.point.fromNode.name + "<br>" + this.point.toNode.name
                }, linkTextPath: {enabled: !0}, textPath: {enabled: !1}
            },
            link: {color: "rgba(100, 100, 100, 0.5)", width: 1},
            draggable: !0,
            layoutAlgorithm: {
                initialPositions: "circle",
                initialPositionRadius: 1,
                enableSimulation: !1,
                theta: .5,
                maxSpeed: 10,
                approximation: "none",
                type: "reingold-fruchterman",
                integration: "euler",
                maxIterations: 1E3,
                gravitationalConstant: .0625,
                friction: -.981
            },
            showInLegend: !1
        }, {
            forces: ["barycenter", "repulsive", "attractive"],
            hasDraggableNodes: !0,
            drawGraph: null,
            isCartesian: !1,
            requireSorting: !1,
            directTouch: !0,
            noSharedTooltip: !0,
            pointArrayMap: ["from", "to"],
            trackerGroups: ["group", "markerGroup", "dataLabelsGroup"],
            drawTracker: g.TrackerMixin.drawTrackerPoint,
            animate: null,
            buildKDTree: g.noop,
            createNode: g.NodesMixin.createNode,
            destroy: function () {
                this.layout.removeElementFromCollection(this, this.layout.series);
                g.NodesMixin.destroy.call(this)
            },
            init: function () {
                n.prototype.init.apply(this, arguments);
                d(this, "updatedData", function () {
                    this.layout &&
                    this.layout.stop()
                });
                return this
            },
            generatePoints: function () {
                var a;
                g.NodesMixin.generatePoints.apply(this, arguments);
                this.options.nodes && this.options.nodes.forEach(function (a) {
                    this.nodeLookup[a.id] || (this.nodeLookup[a.id] = this.createNode(a.id))
                }, this);
                for (a = this.nodes.length - 1; 0 <= a; a--) {
                    var b = this.nodes[a];
                    b.degree = b.getDegree();
                    b.radius = h(b.marker && b.marker.radius, this.options.marker && this.options.marker.radius, 0);
                    this.nodeLookup[b.id] || b.remove()
                }
                this.data.forEach(function (a) {
                    a.formatPrefix = "link"
                });
                this.indexateNodes()
            },
            getPointsCollection: function () {
                return this.nodes || []
            },
            indexateNodes: function () {
                this.nodes.forEach(function (a, b) {
                    a.index = b
                })
            },
            markerAttribs: function (a, b) {
                b = n.prototype.markerAttribs.call(this, a, b);
                f(a.plotY) || (b.y = 0);
                b.x = (a.plotX || 0) - (b.width / 2 || 0);
                return b
            },
            translate: function () {
                this.processedXData || this.processData();
                this.generatePoints();
                this.deferLayout();
                this.nodes.forEach(function (a) {
                    a.isInside = !0;
                    a.linksFrom.forEach(function (a) {
                        a.shapeType = "path";
                        a.y = 1
                    })
                })
            },
            deferLayout: function () {
                var a =
                        this.options.layoutAlgorithm, b = this.chart.graphLayoutsStorage, c = this.chart.graphLayoutsLookup,
                    d = this.chart.options.chart;
                if (this.visible) {
                    b || (this.chart.graphLayoutsStorage = b = {}, this.chart.graphLayoutsLookup = c = []);
                    var e = b[a.type];
                    e || (a.enableSimulation = f(d.forExport) ? !d.forExport : a.enableSimulation, b[a.type] = e = new g.layouts[a.type], e.init(a), c.splice(e.index, 0, e));
                    this.layout = e;
                    e.setArea(0, 0, this.chart.plotWidth, this.chart.plotHeight);
                    e.addElementsToCollection([this], e.series);
                    e.addElementsToCollection(this.nodes,
                        e.nodes);
                    e.addElementsToCollection(this.points, e.links)
                }
            },
            render: function () {
                var a = this.points, b = this.chart.hoverPoint, c = [];
                this.points = this.nodes;
                l.line.prototype.render.call(this);
                this.points = a;
                a.forEach(function (a) {
                    a.fromNode && a.toNode && (a.renderLink(), a.redrawLink())
                });
                b && b.series === this && this.redrawHalo(b);
                this.chart.hasRendered && !this.options.dataLabels.allowOverlap && (this.nodes.concat(this.points).forEach(function (a) {
                    a.dataLabel && c.push(a.dataLabel)
                }), this.chart.hideOverlappingLabels(c))
            },
            drawDataLabels: function () {
                var a =
                    this.options.dataLabels.textPath;
                n.prototype.drawDataLabels.apply(this, arguments);
                this.points = this.data;
                this.options.dataLabels.textPath = this.options.dataLabels.linkTextPath;
                n.prototype.drawDataLabels.apply(this, arguments);
                this.points = this.nodes;
                this.options.dataLabels.textPath = a
            },
            pointAttribs: function (a, b) {
                var c = b || a && a.state || "normal";
                b = n.prototype.pointAttribs.call(this, a, c);
                c = this.options.states[c];
                a && !a.isNode && (b = a.getLinkAttributes(), c && (b = {
                    stroke: c.linkColor || b.stroke,
                    dashstyle: c.linkDashStyle ||
                        b.dashstyle,
                    opacity: h(c.linkOpacity, b.opacity),
                    "stroke-width": c.linkColor || b["stroke-width"]
                }));
                return b
            },
            redrawHalo: b.redrawHalo,
            onMouseDown: b.onMouseDown,
            onMouseMove: b.onMouseMove,
            onMouseUp: b.onMouseUp,
            setState: function (a, b) {
                b ? (this.points = this.nodes.concat(this.data), n.prototype.setState.apply(this, arguments), this.points = this.data) : n.prototype.setState.apply(this, arguments);
                this.layout.simulation || a || this.render()
            }
        }, {
            setState: g.NodesMixin.setNodeState, init: function () {
                a.prototype.init.apply(this,
                    arguments);
                this.series.options.draggable && !this.series.chart.styledMode && (d(this, "mouseOver", function () {
                    e(this.series.chart.container, {cursor: "move"})
                }), d(this, "mouseOut", function () {
                    e(this.series.chart.container, {cursor: "default"})
                }));
                return this
            }, getDegree: function () {
                var a = this.isNode ? this.linksFrom.length + this.linksTo.length : 0;
                return 0 === a ? 1 : a
            }, getLinkAttributes: function () {
                var a = this.series.options.link, b = this.options;
                return {
                    "stroke-width": h(b.width, a.width), stroke: b.color || a.color, dashstyle: b.dashStyle ||
                        a.dashStyle, opacity: h(b.opacity, a.opacity, 1)
                }
            }, renderLink: function () {
                if (!this.graphic && (this.graphic = this.series.chart.renderer.path(this.getLinkPath()).add(this.series.group), !this.series.chart.styledMode)) {
                    var a = this.series.pointAttribs(this);
                    this.graphic.attr(a);
                    (this.dataLabels || []).forEach(function (b) {
                        b && b.attr({opacity: a.opacity})
                    })
                }
            }, redrawLink: function () {
                var a = this.getLinkPath();
                if (this.graphic) {
                    this.shapeArgs = {d: a};
                    if (!this.series.chart.styledMode) {
                        var b = this.series.pointAttribs(this);
                        this.graphic.attr(b);
                        (this.dataLabels || []).forEach(function (a) {
                            a && a.attr({opacity: b.opacity})
                        })
                    }
                    this.graphic.animate(this.shapeArgs);
                    this.plotX = (a[1] + a[4]) / 2;
                    this.plotY = (a[2] + a[5]) / 2
                }
            }, getMass: function () {
                var a = this.fromNode.mass, b = this.toNode.mass, c = a + b;
                return {fromNode: 1 - a / c, toNode: 1 - b / c}
            }, getLinkPath: function () {
                var a = this.fromNode, b = this.toNode;
                a.plotX > b.plotX && (a = this.toNode, b = this.fromNode);
                return ["M", a.plotX, a.plotY, "L", b.plotX, b.plotY]
            }, isValid: function () {
                return !this.isNode || f(this.id)
            }, remove: function (a, b) {
                var c =
                    this.series, d = c.options.nodes || [], e, f = d.length;
                if (this.isNode) {
                    c.points = [];
                    [].concat(this.linksFrom).concat(this.linksTo).forEach(function (a) {
                        e = a.fromNode.linksFrom.indexOf(a);
                        -1 < e && a.fromNode.linksFrom.splice(e, 1);
                        e = a.toNode.linksTo.indexOf(a);
                        -1 < e && a.toNode.linksTo.splice(e, 1);
                        n.prototype.removePoint.call(c, c.data.indexOf(a), !1, !1)
                    });
                    c.points = c.data.slice();
                    for (c.nodes.splice(c.nodes.indexOf(this), 1); f--;) if (d[f].id === this.options.id) {
                        c.options.nodes.splice(f, 1);
                        break
                    }
                    this && this.destroy();
                    c.isDirty =
                        !0;
                    c.isDirtyData = !0;
                    a && c.chart.redraw(a)
                } else c.removePoint(c.data.indexOf(this), a, b)
            }, destroy: function () {
                this.isNode && this.linksFrom.concat(this.linksTo).forEach(function (a) {
                    a.destroyElements && a.destroyElements()
                });
                this.series.layout.removeElementFromCollection(this, this.series.layout[this.isNode ? "nodes" : "links"]);
                return a.prototype.destroy.apply(this, arguments)
            }
        });
        ""
    });
    l(h, "masters/modules/networkgraph.src.js", [], function () {
    })
});
//# sourceMappingURL=networkgraph.js.map
