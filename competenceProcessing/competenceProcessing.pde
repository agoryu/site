int numBalls = 9;
float spring = 0.05;
float friction = -0.6;
Ball[] balls = new Ball[numBalls];

void setup() {
  size(900, 600);
  readData();
  noStroke();
  fill(255, 204);
}

void draw() {
  background(0);
  for (Ball ball : balls) {
    ball.collide();
    ball.move();
    ball.drawBall();
  }
}

void readData() {
  String[] lines = loadStrings("competenceProcessing/competence.tsv");
  //String[] lines = loadStrings("competence.tsv");

  for(int i=0; i<numBalls; i++) {
    String[] columns = split(lines[i], ";");
    float valColor1 = random(0, 255);
    float valColor2 = 255;//random(0, 200);
    float valColor3 = 200;//random(0, 200);
    colorMode(HSB, 255, 255, 255);
    balls[i] = new Ball(random(width), random(height), int(columns[1]), i, balls,
    color(valColor1, valColor2, valColor3), columns[0]);
  }
}

class Ball {

  float x, y;
  float diameter;
  float vx = 0;
  float vy = 0;
  int id;
  color col;
  String name;
  Ball[] others;

  Ball(float xin, float yin, float din, int idin, Ball[] oin, color col, String name) {
    x = xin;
    y = yin;
    diameter = din * 40;
    id = idin;
    others = oin;
    this.col = col;
    this.name = name;

    vx = random(0, 0.2);
    vy = random(0, 0.2);
  }

  void collide() {
    for (int i = id + 1; i < numBalls; i++) {
      float dx = others[i].x - x;
      float dy = others[i].y - y;
      float distance = sqrt(dx*dx + dy*dy);
      float minDist = others[i].diameter/2 + diameter/2;
      if (distance < minDist) {
        float angle = atan2(dy, dx);
        float targetX = x + cos(angle) * minDist;
        float targetY = y + sin(angle) * minDist;
        float ax = (targetX - others[i].x) * spring;
        float ay = (targetY - others[i].y) * spring;
        vx -= ax;
        vy -= ay;
        others[i].vx += ax;
        others[i].vy += ay;
      }
    }
  }

  void move() {
    x += vx;
    y += vy;
    if (x + diameter/2 > width) {
      x = width - diameter/2;
      vx *= friction;
    }
    else if (x - diameter/2 < 0) {
      x = diameter/2;
      vx *= friction;
    }
    if (y + diameter/2 > height) {
      y = height - diameter/2;
      vy *= friction;
    }
    else if (y - diameter/2 < 0) {
      y = diameter/2;
      vy *= friction;
    }
  }

  void drawBall() {
    fill(this.col);
    ellipse(x, y, diameter, diameter);
    fill(255);
    text(name, (x - diameter/2) + (diameter - textWidth(name))/2, y);
  }
}
