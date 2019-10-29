using System.Collections;
using System.Collections.Generic;
using UnityEngine;

namespace SaiaCameraMovement
{   
    public class DragCamera : MonoBehaviour {


        //flag to keep track of whether we are dragging or not
        bool isDragging = false;

        //starting point of a camera movement
        float startMouseX;
        float startMouseY;

        //Camera Component
        Camera cam;

        // Start is called before the first frame update
        void Start()
        {
            //Get our camera component
            cam = GetComponent<Camera>();
        }

        // Update is called once per frame
        void Update()
        {
            //if we press the left button and havent started the dragging, then start dragging
            if(Input.GetMouseButtonDown(1) && !isDragging)
            {
                // set the flag true
                isDragging = true;
                // save the mouse starting position
                startMouseX = Input.mousePosition.x;
                startMouseY = Input.mousePosition.y;
            }

            //if we are not pressing right btn, and are dragging
            else if (Input.GetMouseButtonUp(1) && isDragging)
            {
                //set the flag to false
                isDragging = false;
            }
           
        }

         void LateUpdate()
        {
            //check if we are dragging
            if (isDragging)
            {
                //calculate current mouse pos
                float endMouseX = Input.mousePosition.x;
                float endMouseY = Input.mousePosition.y;

                //difference
                float diffX = endMouseX - startMouseX;
                float diffY = endMouseY - startMouseY;

                //New center of the screen
                float newCenterX = Screen.width / 2 + diffX;
                float newCenterY = Screen.height / 2 + diffY;

                //Get the world coordinate, this is where we should be looking at
                Vector3 lookHerePoint = cam.ScreenToWorldPoint(new Vector3(newCenterX, newCenterY, cam.nearClipPlane));

                //Make our camera look at the "lookHerePoint"
                transform.LookAt(lookHerePoint);

                //starting pos for the next call
                startMouseX = endMouseX;
                startMouseY = endMouseY;
            }
        }
         
    }
}
