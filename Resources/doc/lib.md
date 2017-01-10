# Lib

## Getting started

Lots of lib are available such as Draw, many CodeBare type which allow you to do line with color, line weigth. The pdf is decorate through many fonction available in this lib.


1. [Draw](#draw)
2. [Cellfit](#cellfit)
3. [Barecode 128](#barecode)

## [Draw](#draw)

This extension allows to draw lines, rectangles, ellipses, polygons and curves with line style. 

> Public methods are:
> 
> • SetLineStyle($style: array)
> 
> Sets line style. Parameters are:
> 
> - style: an array with the following possible keys:
> 
> . width: width of the line in user units.

> . cap: type of cap to put on the line (butt, round, square). The difference between "square" and "butt" is that "square" projects a flat end past the end of the line.

> . join: miter, round, or bevel.

> . dash: dash pattern. Is 0 (without dash) or array with series of length values, which are the lengths of the on and off dashes.

> . phase: modifier of the dash pattern which is used to shift the point at which the pattern starts.

> . color: draw color. Array with components (red, green, blue).

> 
> • Line($x1: float, $y1: float, $x2: float, $y2: float, $style: array)
> 
> Draws a line. Overrides the method from FPDF. Parameters are:
> 
> - x1, y1: start point.

> - x2, y2: end point.

> - style: line style (array like for SetLineStyle).


> • Rect($x: float, $y: float, $w: float, $h: float, $style: string, $border_style: array, $fill_color: array)

> Draws a rectangle. Overrides the method from FPDF. Parameters are:

> - x, y: top left corner.
> - w, h: width and height.
> - style: style of rectangle (draw and/or fill: D, F, DF, FD).
- border_style: border style of rectangle. Array with index: (all => style) for all borders, or (L => style, T => style, R => style, B => style) for > each border. Style is an array like for SetLineStyle.
> - fill_color: fill color. Array with components (red, green, blue).

> • Curve($x0: float, $y0: float, $x1: float, $y1: float, $x2: float, $y2: float, $x3: float, $y3: float, $style: string, $line_style: array, $fill_> color: array)

> Draws a Bézier curve. Parameters are:

> - x0, y0: start point.
> - x1, y1: control point 1.
> - x2, y2: control point 2.
> - x3, y3: end point.
> - style: style of rectangle (draw and/or fill: D, F, DF, FD).
> - line_style: line style for curve. Array like for SetLineStyle.
> - fill_color: fill color. Array with components (red, green, blue).
> 
• Ellipse($x0: float, $y0: float, $rx: float, $ry: float, $angle: float, $astart: float, $afinish: float, $style: string, $line_style: array, $fill_> color: array, $nSeg: integer)
> 
> Draws an ellipse. Parameters are:
> 
> - x0, y0: center point.
> - rx, ry: horizontal and vertical radius (if ry is 0, this is a circle).
> - angle: orientation angle (anti-clockwise).
> - astart: start angle.
> - afinish: finish angle.
> - style: style of ellipse (draw and/or fill: D, F, DF, FD, C (D + close)).
> - line_style: line style for ellipse. Array like for SetLineStyle.
> - fill_color: fill color. Array with components (red, green, blue).
> - nSeg: ellipse is made up of nSeg Bézier curves.
> 
> • Circle($x0: float, $y0: float, $r: float, $astart: float, $afinish: float, $style: string, $line_style: array, $fill_color: array, $nSeg: integer)
 
> Draws a circle. Parameters are:
 
> - x0, y0: center point.
> - r: radius.
> - astart: start angle.
> - afinish: finish angle.
> - style: style of circle (draw and/or fill: D, F, DF, FD, C (D + close)).
> - line_style: line style for circle. Array like for SetLineStyle.
> - fill_color: fill color. Array with components (red, green, blue).
> - nSeg: circle is made up of nSeg Bézier curves.
 
> • Polygon($p: array, $style: string, $line_style: array, $fill_color: array)
 
> Draws a polygon. Parameters are:
 
> - p: points. Array with values x0, y0, x1, y1,..., x(np-1), y(np-1).
> - style: style of polygon (draw and/or fill: D, F, DF, FD).
> - line_style: line style. Array with index (all => style) for all borders, or (0..np-1 => style) for each border. Style is an array like for > SetLineStyle.
> - fill_color: fill color. Array with components (red, green, blue)
 
> • RegularPolygon($x0: float, $y0: float, $r: float, $ns: Integer, $angle: float, $circle: boolean, $style: string, $line_style: array, $fill_color: > array, $circle_style: array, $circle_line_style: array, $circle_fill_color: array)
 
> Draws a regular polygon. Parameters are:
 
> - x0, y0: center point.
> - r: radius of circumscribed circle.
> - ns: number of sides.
> - angle: orientation angle (anti-clockwise).
> - circle: draw circumscribed circle or not.
> - style: style of polygon (draw and/or fill: D, F, DF, FD).
> - line_style: line style. Array with index (all => style) for all borders, or (0..ns-1 => style) for each border. Style is an array like for > SetLineStyle.
> - fill_color: fill color. Array with components (red, green, blue).
> - circle_style: style of circumscribed circle (draw and/or fill: D, F, DF, FD).
> - circle_line_style: line style for circumscribed circle. Array like for SetLineStyle.
> - circle_fill_color: fill color for circumscribed circle. Array with components (red, green, blue).
> 
• StarPolygon($x0: float, $y0: float, $r: float, $nv: Integer, $ng: Integer, $angle: float, $circle: boolean, $style: string, $line_style: array, > $fill_color: array, $circle_style: array, $circle_line_style: array, $circle_fill_color: array)
> 
> Draws a star polygon. Parameters are:
> 
> - x0, y0: center point.
> - r: radius of circumscribed circle.
> - nv: number of vertices.
> - ng: number of gaps (ng % nv = 1 => regular polygon).
> - angle: orientation angle (anti-clockwise).
> - circle: draw circumscribed circle or not.
> - style: style of polygon (draw and/or fill) (D, F, DF, FD).
> - line_style: line style. Array with index (all => style) for all borders, or (0..n-1 => style) for each border. Style is an array like for > SetLineStyle.
> - fill_color: fill color. Array with components (red, green, blue).
> - circle_style: style of circumscribed circle (draw and/or fill) (D, F, DF, FD) (if draw).
> - circle_line_style: line style for circumscribed circle. Array like for SetLineStyle (if draw).
> - circle_fill_color: fill color for circumscribed circle. Array with components (red, green, blue).

> • RoundedRect($x: float, $y: float, $w: float, $h: float, $r: float, $round_corner: string, $style: string, $border_style: string, $fill_color: array)
> 
> Draws a rounded rectangle. Parameters are:
 
> - x, y: top left corner.
> - w, h: width and height.
> - r: radius of the rounded corners.
- round_corner: draws rounded corners or not. String with a 0 (not rounded i-corner) or 1 (rounded i-corner) in i-position. Positions are, in order: > top left, top right, bottom right and bottom left.
> - style: style of rectangle (draw and/or fill: D, F, DF, FD).
> - border_style: border style of rectangle. Array like for SetLineStyle.
> - fill_color: fill color. Array with components (red, green, blue). 

## [Cellfit](#cellfit)

This is an extension and the doc says it an extension of Cell() allowing to output text with either character spacing or horizontal scaling.

 
> CellFit(float w [, float h [, string txt [, mixed border [, int ln [, string align [, boolean fill [, mixed link [, boolean scale [, boolean > force]]]]]]]]])
 
> The first 8 parameters are the same as Cell(). The additional parameters are:
 
> scale
 
> false: character spacing
> true: horizontal scaling
 
> force
 
> false: only space/scale if necessary (not when text is short enough to fit)
> true: always space/scale
 
> The following four methods are also provided for convenience, allowing all combinations of scale/force, and using only the 8 parameters of Cell():
 
> CellFitScale()

> CellFitScaleForce()

> CellFitSpace()

> CellFitSpaceForce()

## [CodeBar 128](#barecode)


This script handles Code 128 barcodes (A, B and C). All the 128 ASCII characters are available. A, B and C character sets are automatically selected according to the value to print. 

**Code 128 barcodes have to be as width as the words number to be easier readable**

> Code128(float x, float y, string code, float w, float h)
> 
> x: abscissa

> y: ordinate

> code: barcode value

> w: total width

> h: height