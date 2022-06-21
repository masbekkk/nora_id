#include <windows.h>
#include <GL/freeglut.h>
#include <iostream>

// Nama : 
// NIM  : 
// TTS (2D + TRANSFORMASI) | Grafika Komputer

float sudut = 0.0f;
int hitung = 0;

void timer(int value) {
    glutPostRedisplay();
    glutTimerFunc(1000, timer, 0);
}

void persegiPanjang() {
    glVertex2f(-0.02f, -0.08f);
    glVertex2f(0.02f, -0.08f);
    glVertex2f(0.02f, 0.08);
    glVertex2f(-0.02f, 0.08f);
    glEnd();
}

void kotak() {
    glBegin(GL_QUADS);
    glVertex2f(0.1f, 0.05f);
    glVertex2f(0.15f, 0.05f);
    glVertex2f(0.15f, 0.1f);
    glVertex2f(0.1f, 0.1f);
    glEnd();
}

void segitiga() {
    glBegin(GL_TRIANGLES);
    glVertex2f(-0.06f, -0.03f);
    glVertex2f(-0.03f, 0.03f);
    glVertex2f(0.0f, -0.03f);
    glEnd();
}

void objek() {
    // Background
    if (hitung % 2 == 0) {
        
    }
    else {
        
    }

    glClear(GL_COLOR_BUFFER_BIT);
    glMatrixMode(GL_MODELVIEW);
    glLoadIdentity();

    if (hitung % 2 == 0) {
        // persegi panjang 1
        glPushMatrix();
        glRotatef(sudut, 0.0f, 0.0f, 1.0f);
        glBegin(GL_QUADS);
        glColor3f(0.0f, 1.0f, 1.0f);
        persegiPanjang();
        glPopMatrix();
    }
    else {
        // persegi panjang 1
        glPushMatrix();
        glRotatef(sudut, 0.0f, 0.0f, 1.0f);
        glBegin(GL_QUADS);
        glColor3f(1.0f, 0.0f, 1.0f);
        persegiPanjang();
        glPopMatrix();
    }
    glutSwapBuffers();
    sudut += 10.0f;
    hitung += 1;
}

void reshape(GLsizei width, GLsizei height) {
    if (height == 0) height = 1;
    GLfloat aspect = (GLfloat)width / (GLfloat)height;
    glViewport(0, 0, width, height);
    glMatrixMode(GL_PROJECTION);
    glLoadIdentity();
    if (width >= height) {
        gluOrtho2D(-1.0 * aspect, 1.0 * aspect, -1.0, 1.0);
    }
    else {
        gluOrtho2D(-1.0, 1.0, -1.0 / aspect, 1.0 / aspect);
    }
}

int main(int argc, char** argv) {
    glutInit(&argc, argv);
    glutInitDisplayMode(GLUT_RGB | GLUT_DOUBLE);
    glutInitWindowSize(640, 640);
    glutInitWindowPosition(0, 0);
    glutCreateWindow("TTS - NIM");
    glutDisplayFunc(objek);
    glutReshapeFunc(reshape);
    glutTimerFunc(0, timer, 0);
    glutMainLoop();
    return 0;
}